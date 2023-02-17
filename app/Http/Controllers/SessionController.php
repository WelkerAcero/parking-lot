<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public $res;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('guest')->except(['logout']);
    }


    public function index()
    {
        return view("login_views.login");
    }

    public function authentication(LoginRequest $request)
    {

        if (strlen($request->input('password')) <= 6) {
            $this->res = 'El password debe ser mayor a 6 caracteres';
            return view('login_views.login', ['msgErr' => $this->res]);
        }

        if ($user = Auth::attempt($request->only('email', 'password'))) {
            if ($user) {
                $request->session()->regenerate();
                $request->session()->put('authenticated', Auth::user()->name);
                return redirect()->intended('dashboard');
            }
        }
        $this->res = 'Error - Usuario o contraseña no valido';
        return view('login_views.login', ['msgErr' => $this->res]);
    }

    public function preloader()
    {
        return view('preloader');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->forget('authenticated');
        return redirect()->route('preloader');
    }
}
