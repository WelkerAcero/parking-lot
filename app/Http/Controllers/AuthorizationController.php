<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorizationRequest;
use App\Models\Authorization;
use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

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

    public function getFilteredData(Request $request)
    {
        $customer = Customer::select('id')->where('ci', $request->filterData)->get();
        $vehicle = Vehicle::where('customer_id', $customer[0]->id)->get();
        $authorizations = Authorization::with('user', 'vehicle.customer')->where('vehicle_id', $vehicle[0]->id)->get();
        return $this->index($authorizations);
    }

    public function index($filter = null)
    {
        if (isset($filter)) {
            $authorizations = $filter;
            return view('authorization.index', compact('authorizations'));
        }
        $authorizations = Authorization::with('user', 'vehicle.customer')->paginate();
        return view('authorization.index', compact('authorizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($customer_id)
    {
        $customer_profile = Customer::with('charge')->where('ci', $customer_id)->get();
        $customer_profile = $customer_profile[0];
        return view('authorization.create', compact('customer_profile'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorizationRequest $request)
    {
        Authorization::create($request->validated());
        return redirect()->route('authorization.index');
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
