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

        $credentials = $request->only('username','password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                if ($user->level == 'superadmin') {
                    return redirect()->intended('dashboard');
                } elseif ($user->level == 'admin') {
                    return redirect()->intended('homeadmin');
                } elseif ($user->level == 'staff') {
                    return redirect()->intended('itemstaff');
                }
                return redirect()->intended('login');
            }

        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Account not Found']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }
}