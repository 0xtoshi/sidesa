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

	public function initAdmin(Request $request)
	{
		if(!$request->session()->has('SessionAdmin')){

			return ['success' => false, 'message' => 'Sesi tidak ditemukan'];
			exit;
		}
	}
   
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


	public function getMainData(Request $request)
	{
		
		if(!$request->session()->has('SessionAdmin')){
			return ['success' => false, 'message' => 'Sesi tidak ditemukan'];
			exit;
		}

		return BackendAdmin::getMainData();
	}



	public function UpdateIdentitasDesa(Request $request)
	{
		
		if(!$request->session()->has('SessionAdmin')){
			return ['success' => false, 'message' => 'Sesi tidak ditemukan'];
			exit;
		}

		$input = [

			'nama_desa' => $request->input('nama_desa'),
			'kode_desa' => $request->input('kode_desa'),
			'kode_pos' => $request->input('kode_pos'),
			'nama_kepala_desa' => $request->input('nama_kepala_desa'),
			'nip_kepala_desa' => $request->input('nip_kepala_desa'),
			'telepon_desa' => $request->input('telepon_desa'),
			'email_desa' => $request->input('email_desa'),
			'alamat_desa' => $request->input('alamat_desa')

		];

		foreach ($input as $key => $value) {
			
			if($value == '')
			{	
				$callback = ['success' => false, 'message' => 'Anda harus mengisi form '. $key];
				break;
			}else{

				$callback = BackendAdmin::InsertIdentitasDesa($input);
				break;
			}

		}

		return $callback;

	}

	public function getIdentitasDesa(Request $request)
	{

		if(!$request->session()->has('SessionAdmin')){
			return ['success' => false, 'message' => 'Sesi tidak ditemukan'];
			exit;
		}

		return BackendAdmin::getIdentitasDesa();

	}

	public function getDataDusun()
	{

		return BackendAdmin::GroupingDusun();

	}


}
