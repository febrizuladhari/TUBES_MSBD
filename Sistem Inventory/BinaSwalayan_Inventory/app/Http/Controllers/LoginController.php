<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == 'superadmin') {
                return redirect()->intended('homesuperadmin');
            } elseif ($user->level == 'admin') {
                return redirect()->intended('homeadmin');
            } elseif ($user->level == 'staff') {
                return redirect()->intended('homestaff');
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
                    Alert::success('Super Admin', 'Hi! You have successfully logged in');
                    return redirect()->intended('homesuperadmin');
                } elseif ($user->level == 'admin') {
                    Alert::success('Admin', 'Hi! You have successfully logged in');
                    return redirect()->intended('homeadmin');
                } elseif ($user->level == 'staff') {
                    Alert::success('Staff', 'Hi! You have successfully logged in');
                    return redirect()->intended('homestaff');
                }
                return redirect()->intended('/');
            }

        Alert::error('Error !', 'Your Account not Found');
        return redirect('/')->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        Alert::success('Bye!', 'You have logged out');
        return Redirect('/');
    }
}
