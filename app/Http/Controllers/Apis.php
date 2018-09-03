<?php


/*

	Api Sistem Informasi Desa
	Magang 2018
	Tim Pengembang Gilang, Gumilar, Muhlis
	gilang.damar@si.stmikdb.ac.id
	04/09/2018


*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BackendAdmin;



class Apis extends Controller
{
   
	public function CheckAdminLogin(Request $request)
	{
		$data = [

			'username' => $request->input('username'),
			'password' => $request->input('password')

		];

		return BackendAdmin::VerifyUserAdmin($data);
	}

	public function PasswordReset(Request $request){

		$data = [

			'username' => $request->input('username'),
			'ip_address' => $request->ip()

		];

		return BackendAdmin::password_reset($data);

	}

	public function PasswordResetVerifyHash(Request $request)
	{

		$data = [

			'hash' => $request->input('hash')

		];
		
		return BackendAdmin::verify_reset_hash($data);
	}

	public function PasswordResetApply(Request $request)
	{

		$data = [

			'password1' => $request->input('password1'),
			'password2' => $request->input('password2'),
			'user_id' => $request->session()->get('session_reset_uid'),
			'hash' => $request->session()->get('session_reset_hash'),
			'session_reset' => $request->session()->get('session_reset')

		];
		return BackendAdmin::password_reset_apply($data);

	}	


}
