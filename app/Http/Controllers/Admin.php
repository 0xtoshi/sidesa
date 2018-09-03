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

class Admin extends Controller
{    

	public function login()
	{
		return view('template/admin/pages-login');
	}

	public function password_reset()
	{
		return view('template/admin/password-reset');
	}

}
