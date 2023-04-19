<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorizationRequest;
use App\Models\Authorization;
use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class AuthorizationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getCurrentParkedCars()
    {
        $getAuthorizations = Authorization::with('user', 'vehicle.customer')
            ->whereRelation('vehicle.customer', 'status', 1)
            ->where('authorization_type', 'Entrance')
            ->whereDate('created_at', date('Y-m-d'))
            ->paginate(15);
        return $this->index($getAuthorizations);
    }

    public function getByIdAndDate($id, $date)
    {
        $data = Authorization::with('user',)
            ->where('customer_ci', $id)
            ->whereDate('created_at', $date)
            ->paginate(15);

        return $data;
    }

    public function getFilteredData(Request $request)
    {
        $authorizations = array();

        if (isset($request->getById) || isset($request->getByDate)) {
            if (isset($request->getById) && isset($request->getByDate)) {
                $authorizations = $this->getByIdAndDate($request->getById, $request->getByDate);
            } else if (isset($request->getByDate)) {
                $authorizations = Authorization::with('user')
                    ->whereDate('created_at', $request->getByDate)
                    ->paginate(15);
            } else {
                $authorizations = Authorization::with('user')
                    ->where('customer_ci', $request->getById)
                    ->paginate(15);
            }

            if (count($authorizations) === 0) {
                return $this->index('Error');
            }

            return $this->index($authorizations);
        }
    }

    public function index($filter = null)
    {
        if ($filter !== null && $filter !== 'Error') {
            $authorizations = $filter;
            return view('authorization.index', compact('authorizations'));
        }

        if ($filter !== null && $filter === 'Error') {
            return view('authorization.index', ['msgError' => 'Error: No existen registros en el filtro solicitado']);
        }

        $authorizations = Authorization::with('user')->paginate(15);
        return view('authorization.index', compact('authorizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($customer_id)
    {
        try {
            $customer = Customer::with('charge', 'vehicle')->where('ci', $customer_id)->get()[0];
            return view('authorization.create', compact('customer'));
        } catch (\Throwable $th) {
            $msgError = "El cliente no se encuentra registrado en el sistema";
            return view('authorization.create', compact('msgError'));
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorizationRequest $request)
    {
        try {
            Authorization::create($request->validated());
            return redirect()->route('authorization.index');
        } catch (\Throwable $th) {
            return dd($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
