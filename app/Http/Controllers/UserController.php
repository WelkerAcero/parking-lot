<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Charge;
use App\Models\DocType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('doctype')->paginate(6);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $user = new User();
        $doctypes = DocType::select('id', 'name')->get();
        $charges = Charge::select('id', 'name')->get();
        return view('users.create', compact('user', 'doctypes', 'charges'));
    }

    public function store(UserRequest $request)
    {
        Hash::make($request->input('password'), [
            'rounds' => 10,
        ]);

        User::create($request->validated());
        return redirect()->route('user.index');
    }


    public function edit(User $user)
    {
        $doctypes = DocType::select('id', 'name')->get();
        $charges = Charge::select('id', 'name')->get();
        return view('users.edit', compact('user', 'charges', 'doctypes'));
    }

    public function update(UserRequest $request, User $customer)
    {
        $customer->update($request->validated());
        return redirect()->route('user.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
