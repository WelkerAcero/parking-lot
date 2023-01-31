<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Charge;
use App\Models\Customer;
use App\Models\DocType;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::with('doctype', 'charge')->paginate();
        return view('customer.index', compact('customers'));
    }

    public function show(Customer $id)
    {
        $customer = Customer::with('doctype', 'charge')->find($id);
        $customer = $customer[0];
        return view('customer.show', compact('customer'));
    }

    public function create()
    {
        $doctypes = DocType::select('id', 'name')->get();
        $charges = Charge::select('id', 'name')->get();
        return view('customer.create', compact('doctypes', 'charges'));
    }

    public function store(CustomerRequest $request)
    {
        Customer::create($request->validated());
        return redirect()->route('customer.index');
    }


    public function edit(Customer $customer)
    {
        $doctypes = DocType::select('id', 'name')->get();
        $charges = Charge::select('id', 'name')->get();
        return view('customer.edit', compact('customer', 'charges', 'doctypes'));
    }

    public function update()
    {
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
