<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){

        $validatedData=$request->validate([
            'name'=>'required',
            'email'=>'required|email:dns|unique:users',
            'alamat'=>'required',
            'password' => 'required|min:5|max:255'
        ]);

        if(isset($request['role'])){
            $validatedData['role']=2;
        };
        User::create($validatedData);   

        return redirect('/login')->with('success','User created successfully.');
    }

}
