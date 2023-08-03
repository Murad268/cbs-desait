<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login() {
        return view('admin.login');
    }


    public function enter(Request $request) {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('admin.index');
        } else {
            return back()->with('error', 'Login or Passwor is invalid');
        }
    }

    public function logout() {
        Auth::logout();
            return redirect()->route('login');
        }
}
