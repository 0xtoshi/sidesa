<?php


/*

	Backend Admin Sistem Informasi Desa
	Magang 2018
	Tim Pengembang Gilang, Gumilar, Muhlis
	gilang.damar@si.stmikdb.ac.id
	04/09/2018


*/

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Session;

class BackendAdmin extends Model
{
    

	public static function VerifyUserAdmin($data)
	{
		$fetch = DB::table('user_administrator')
			->select('nama','user','password','role','email')
			->where('user','=',$data['username'])
			->get();

		if(count($fetch) == 1 ){

			if(password_verify($data['password'],$fetch[0]->password))
			{

				$status = [ 
					'success' => true, 
					'message' => 'Sukses login ke administrator' 
				];

				session([

					'SessionAdmin' => true,
					'SessionAdminData' => [

						'nama' => $fetch[0]->nama,
						'username' => $fetch[0]->user,
						'role' => $fetch[0]->role,
						'email' => $fetch[0]->email

					]
				]);

			}else{

				$status = [ 
					'success' => false,
					'message' => 'Gagal login ke administrator password atau username tidak sesuai' 
				];

			}

		}else{

			$status = [ 'success' => false , 'message' => 'User tidak ditemukan' ];
		}

		return $status;
	}


	public static function password_reset($data)
	{

		$fetch = DB::table('user_administrator')
			->select('id','nama','user','password','role','email')
			->where('user','=',$data['username'])
			->get();

		if(count($fetch) == 1 ){

			DB::table('user_administrator_reset')->insert([

				'req_id' => uniqid(),
				'user_id' => $fetch[0]->id,
				'ip_address' => $data['ip_address'],
				'hash' => md5(microtime().uniqid()), 
				'timestamp' => round(microtime(true))
			]);

			$status = [ 'success' => true , 'message' => 'Perihal reset password telah dikirim diemail'  ];

		}else{

			$status = [ 'success' => false , 'message' => 'User tidak ditemukan' ];
		}

		return $status;
		
	}

	public static function verify_reset_hash($data)
	{
		$fetch = DB::table('user_administrator_reset')
			->select('*')
			->where('hash','=',$data['hash'])
			->get();

		if(count($fetch) == 1 ){

			session([

				'session_reset' => true,
				'session_reset_hash' => $data['hash'],
				'session_reset_uid' => $fetch[0]->user_id
			
			]);
			$status = [ 'success' => true , 'message' => 'Verify hash sukses! klik next!'  ];

		}else{

			$status = [ 'success' => false , 'message' => 'Reset hash tidak ditemukan' ];
		}

		return $status;
	}

	public static function password_reset_apply($data)
	{
		if($data['session_reset'] == true)
		{
			if($data['password1'] == $data['password2'])
			{

				DB::table('user_administrator')
					->where('id','=',$data['user_id'])
					->update([

						'password' => password_hash($data['password1'], PASSWORD_BCRYPT, ['cost' => 12 ])

					]);
				DB::table('user_administrator_reset')
					->where('hash','=',$data['hash'])
					->delete();
				Session::flush();

				$status = [ 'success' => true, 'message' => 'Sukses mengganti password silahkan login ulang!'];

			}else{

				$status = ['success' => false, 'message' => 'Password tidak sama mohon cocokan ulang!'];
			}

		}else{

			$status = [ 'success' => false, 'message' => 'Sesi reset tidak ditemukan' ];

		}

		return $status;
	}


}
