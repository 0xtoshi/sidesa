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

	public static function getMainData()
	{

		$getDataWarga = DB::table('data_warga')
						->select('id')
						->get();
		$getAdminUser = DB::table('user_administrator')
						->select('id')
						->get();
		// belum selesai

		return [

			'jumlah_db_warga' => count($getDataWarga),
			'jumlah_db_admin' => count($getAdminUser)

		];

	}

	public static function InsertIdentitasDesa($data)
	{
		DB::table('info_desa')->insert($data);
		return ['success' => true, 'message' => 'Sukses mengupdate identitas desa!'];
	}

	public static function getIdentitasDesa()
	{
		return DB::table('info_desa')
				->select(
					'nama_desa',
					'kode_desa',
					'kode_pos',
					'nama_kepala_desa',
					'nip_kepala_desa',
					'telepon_desa',
					'email_desa',
					'alamat_desa'
					)
					->orderBy('id','DESC')
					->limit(1)
					->get();
	}


	public static function GroupingDusun()
	{
		
		      return DB::table('data_warga')
				    ->select(DB::raw('alamat, count(alamat) as total'))
				    ->groupBy('alamat')
				    ->orderBy('total')
				    ->get();
		
	}

	public static function ListDataWarga()
	{

		return DB::table('data_warga')
				
				->orderBy('nama_lengkap','ASC')
				->get();

	}


	public static function GetDataPegawai()
	{

		return DB::table('data_pegawai')
				
				->orderBy('nama','ASC')
				->get();

	}


	public static function TambahPegawai($data)
	{

		return DB::table('data_pegawai')->insert($data);

	} 

	public static function ListDataWargaByDusun($dusun)
	{

		$command = DB::table('data_warga')
				->select('nama_lengkap','jenis_kelamin','agama','tgl_lahir','nik')
				->orderBy('nama_lengkap','ASC')
				->where('alamat','=',$dusun)
				->get();
		$data = [];
		foreach ($command as $key => $value) {
			$data[] = [ $value->nama_lengkap, $value->jenis_kelamin, $value->agama, $value->tgl_lahir, $value->nik ];
		}
		return $data;
	}

	public static function LisDataWargaByNama($nama)
	{
		/*

		`id`, `nik`, `no_kk`, `nama_lengkap`, `nama_kk`, `tgl_lahir`, `jenis_kelamin`, `tempat_lahir`, `golongan_darah`, `agama`, `status_kawin`, `status_hbkel`, `kelainan`, `penyandang_cacat`, `pendidikan`, `pekerjaan`, `nama_ibu`, `nama_ayah`, `alamat`, `RT`, `RW`, `no_kecamatan`, `nama_kecamatan`, `no_kelurahan`, `nama_kelurahan`SELECT * FROM `data_warga` WHERE 1


		NIK	Nama	Tempat Lahir	Tanggal Lahir	Jenis Kelamin	Agama	Status Kawin	Pendidikan	Pekerjaan	RT	RW	Alamat	Golongan Darah

		 */


		if($nama == ""){


		$command = DB::table('data_warga')
				->select('nik','nama_lengkap','tempat_lahir','tgl_lahir','jenis_kelamin','agama','status_kawin','pendidikan','pekerjaan','RT','RW','alamat','golongan_darah')
				->orderBy('nama_lengkap','ASC')
				->limit(30)
				->get();
		$data = [];
		foreach ($command as $key => $value) {
			$data[] = [ $value->nik, $value->nama_lengkap, $value->tempat_lahir,$value->tgl_lahir, $value->jenis_kelamin, $value->agama, $value->status_kawin, $value->pendidikan, $value->pekerjaan, $value->RT, $value->RW, $value->alamat, $value->golongan_darah ];
		}


		}else{


		$command = DB::table('data_warga')
				->select('nik','nama_lengkap','tempat_lahir','tgl_lahir','jenis_kelamin','agama','status_kawin','pendidikan','pekerjaan','RT','RW','alamat','golongan_darah')
				->orderBy('nama_lengkap','ASC')
				->where('nama_lengkap','like','%' .$nama. '%')
				->get();
		$data = [];
		foreach ($command as $key => $value) {
						$data[] = [ $value->nik, $value->nama_lengkap, $value->tempat_lahir,$value->tgl_lahir, $value->jenis_kelamin, $value->agama, $value->status_kawin, $value->pendidikan, $value->pekerjaan, $value->RT, $value->RW, $value->alamat, $value->golongan_darah ];
		}


		}

		
		return $data;
		
	}


}
