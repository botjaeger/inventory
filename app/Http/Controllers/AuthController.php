<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function index(){
    	return view('auth.login');
    }

    public function login(Request $request){
    	$this->validate($request, [
    		'username'=> 'required|min:5',
    		'password'=> 'required|min:5'
    	]);

    	if(Auth::attempt(['username'=> $request['username'], 'password'=> $request['password']])){
    		if(Auth::user()->role->role == 'admin'){
    			return redirect()->route('admin_main');
    		}else{
    			return redirect()->route('staff_main');
    		}
    	}else{
    		return redirect()->back()->with('info', 'Invalid Username or Password');
    	}
    }
}
