<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\Customer;
use App\Models\VehicleType;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vehicles = Vehicle::with('vehicle', 'customer')->paginate(15);
        return view('vehicle.index', compact('vehicles'));
    }

    // public function show(Vehicle $id)
    // {
    //     $vehicle = Vehicle::with('engine', 'customer')->find($id);
    //     $vehicle = $vehicle[0];
    //     return view('vehicle.show', compact('vehicle'));
    // }

    public function create()
    {
        $vehicle = new Vehicle();
        $owner = Customer::select('id', 'name')->get();
        $engines = VehicleType::select('id', 'name')->get();
        return view('vehicle.create', compact('vehicle', 'owner', 'engines'));
    }

    public function store(VehicleRequest $request)
    {
        Vehicle::create($request->validated());
        return redirect()->route('vehicle.index');
    }


    public function edit(Vehicle $vehicle)
    {
        $owner = Customer::select('id', 'name')->get();
        $engines = VehicleType::select('id', 'name')->get();
        return view('vehicle.edit', compact('vehicle', 'owner', 'engines'));
    }

    public function update(VehicleRequest $request, Vehicle $vehicle)
    {
        /* return $request->all(); */
        $vehicle->update($request->validated());
        return redirect()->route('vehicle.index');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicle.index');
    }
}
