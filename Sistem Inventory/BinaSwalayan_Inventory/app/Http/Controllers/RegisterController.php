<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{

    public function store(request $request){

        $validatedData = $request->validate([
            'nama'=>'required|max:255',
            'username'=>'required|min:3|max:20|unique:users',
            'password'=>'required|max:30',
            'level'=>'required',
            'jenis_kelamin'=>'required',
            'alamat'=>'required|max:255',
            'no_telp'=>'required|max:15',
            'id_outlet'=>'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('Success', 'Registrasi Anda Berhasil');
        Alert::success('Great !', 'You have added a new user');


        return redirect ('/accounts');
    }
}
