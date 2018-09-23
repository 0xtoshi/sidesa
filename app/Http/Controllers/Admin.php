<?php


/*

	Controller Admin Sistem Informasi Desa
	Magang 2018
	Tim Pengembang Gilang, Gumilar, Muhlis
	gilang.damar@si.stmikdb.ac.id
	04/09/2018


*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\BackendAdmin;

class Admin extends Controller
{    

	public function init(Request $request)
	{
		if($request->session()->has('SessionAdmin')){

			return redirect('/admin/dashboard');

		}else{

			return redirect('/admin/login');
		}
	}

	public function login()
	{
		return view('template/admin/pages-login');
	}

	public function password_reset()
	{
		return view('template/admin/password-reset');
	}

	public function AdminDashboard(Request $request)
	{

		if(!$request->session()->has('SessionAdmin')){
			return redirect('/admin/login');
		}

		return view('template/admin/dashboard1');

	}

	public function InfoDesa(Request $request)
	{

		if(!$request->session()->has('SessionAdmin')){
			return redirect('/admin/login');
		}
		return view('template/admin/info-desa');

	}
	public function DaftarDusun(Request $request)
	{

		if(!$request->session()->has('SessionAdmin')){
			return redirect('/admin/login');
		}
		return view('template/admin/daftar-dusun',[ 'data' => BackendAdmin::ListDataWarga() ]);

	}

	public function DaftarPegawai(Request $request)
	{

		if(!$request->session()->has('SessionAdmin')){
			return redirect('/admin/login');
		}
		return view('template/admin/daftar-pegawai',[ 'data' => BackendAdmin::GetDataPegawai() ]);


	}

	public function AdminLogOut()
	{
		Session::flush();
		return redirect('/');
	}	


	public function Penduduk(Request $request)
	{

		if(!$request->session()->has('SessionAdmin')){
			return redirect('/admin/login');
		}
		return view('template/admin/penduduk',[ 'data' => BackendAdmin::GetDataPegawai() ]);

	}

}
