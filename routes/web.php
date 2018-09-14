<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin/','Admin@init');
Route::get('/admin/login','Admin@login');
Route::get('/admin/password_reset','Admin@password_reset');
Route::get('/admin/dashboard','Admin@AdminDashboard');
Route::get('/admin/logout','Admin@AdminLogOut');
Route::get('/admin/info-desa/identitas','Admin@InfoDesa');
Route::get('/admin/info-desa/wilayah','Admin@DaftarDusun');
Route::get('/admin/info-desa/pegawai','Admin@InfoDesa');



Route::post('/api/admin/login','Apis@CheckAdminLogin');
Route::post('/api/admin/password_reset','Apis@PasswordReset');
Route::post('/api/admin/verify_hash_reset','Apis@PasswordResetVerifyHash');
Route::post('/api/admin/password_reset_apply','Apis@PasswordResetApply');
Route::get('/api/admin/main_data','Apis@getMainData');
Route::post('/api/admin/update_identitas','Apis@UpdateIdentitasDesa');
Route::get('/api/admin/get_identitas','Apis@getIdentitasDesa');
Route::get('/api/admin/get_datadusun','Apis@getDataDusun');