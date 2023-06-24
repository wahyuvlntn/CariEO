<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'login',
            'active' => 'login'
        ]);
    }
    public function authenticate(Request $request){
        $credentials=$request -> validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $role=Auth::user()->role;
            if($role=='2'){
                return redirect()->intended('/dashboard');
            }
            else{
                return redirect()->intended('/dashboardUser');
            }
            
        }
 
        return back()->withErrors('loginError', 'Login failed!');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
