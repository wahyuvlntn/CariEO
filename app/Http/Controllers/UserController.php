<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboardUser.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboardUser.profile.index',[
            'user'=>User::where(auth()->user()->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // $validatedData=$request->validate([
        //     'name'=>'required',
        //     'alamat'=>'required',
        // ]);
        

        $rules=[
            'name'=>'required',
            'alamat'=>'required',
            'password' => 'required|min:5|max:255'
        ];
        $rules['password']=bcrypt($rules['password']);
        //'email'=>'required|email:dns|unique:users',
        if($request->email != $user->email){
            $rules['email']='required|email:dns|unique:users';
        }
         $validatedData = $request->validate($rules);

        //return $validatedData;
        
        $userId = auth()->user()->id;
        User::where('id', $userId)->update($validatedData);
        return redirect('/dashboardUser');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
