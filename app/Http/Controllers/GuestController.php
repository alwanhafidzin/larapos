<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GuestController extends Controller {

	public function __construct() {}

	public function login() {
		 $data['title'] = "Login - laracms";
						  return view('login_page', $data);
	}

	//https://laravel.com/docs/5.2/session
	public function loginAction(Request $request) {
		 $method = $request->method();
		 if($method == "POST") {
			  $result = DB::selectOne("SELECT u.id, u.nama, u.status, r.nama AS role FROM t_user AS u 
						RIGHT JOIN t_role AS r ON u.t_role_id = r.id WHERE u.email=? AND u.password=?", [
				   $request->input('email'),
				   $request->input('password')
			  ]);
			  if($result != null) {
				   $request->session()->put('s_id', $result->id);
				   $request->session()->put('s_nama', $result->nama);
				   $request->session()->put('s_status', $result->status);
				   $request->session()->put('s_role', $result->role);
				   return redirect('/dashboard');
			  }else {
				   return redirect('/login');
			  }
		 }else {
			  return redirect('/login');
		 }
	}


}