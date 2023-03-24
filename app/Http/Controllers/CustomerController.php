<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Charge;
use App\Models\Customer;
use App\Models\DocType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Node\Block\Document;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers = Customer::with('doctype', 'charge')->paginate(15);
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
        $customer = new Customer();
        $doctypes = DocType::select('id', 'name')->get();
        $charges = Charge::select('id', 'name')->get();
        return view('customer.create', compact('customer', 'doctypes', 'charges'));
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

    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());
        return redirect()->route('customer.index');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
