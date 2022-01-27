<?php

namespace App\Http\Controllers;
use Illuminate\Http\request;
use Auth;


class AuthController extends Controller 
{
	public function showLogin()
	{
		return view ('login.login');
	}

	public function loginProcess()
	{
	
		if(Auth::attempt(['Email' => request ('Email'), 'Password' => request('Password')])){
			return redirect('Cobe')->with('success','Login Berhasil');
		}else{
		return back()->with('danger', 'Login Gagal','Silahkan cek email dan password');		
		}
	}
}