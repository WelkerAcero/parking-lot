<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class PasswordResetController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }
    //

    public function index()
    {
        return view('password.password_request');
    }

    public function reset(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );
        $status === Password::RESET_LINK_SENT;

        if ($status === 'passwords.sent') {
            return view('password.password_request', ['status' => 'El link ha sido enviado al correo']);
        }

        return view('password.password_request', ['status' => 'Error: El link no pudo ser enviado']);
    }


    public function changePassView($token)
    {
        return view('password.reset', compact('token'));
    }

    public function changePass(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill(['password' => $password])->setRememberToken(Str::random(60));
                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
