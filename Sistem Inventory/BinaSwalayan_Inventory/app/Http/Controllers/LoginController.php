<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == 'superadmin') {
                return redirect()->intended('dashboard');
            } elseif ($user->level == 'admin') {
                return redirect()->intended('homeadmin');
            } elseif ($user->level == 'staff') {
                return redirect()->intended('itemstaff');
            }
        }
        return view('auth.login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

        $kredensil = $request->only('username','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'superadmin') {
                    return redirect()->intended('/dashboard');
                } elseif ($user->level == 'admin') {
                    return redirect()->intended('homeadmin');
                } elseif ($user->level == 'staff') {
                    return redirect()->intended('/itemstaff');
                }
                return redirect()->intended('/');
            }

        return redirect('login')
                                ->withInput()
                                ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }
}