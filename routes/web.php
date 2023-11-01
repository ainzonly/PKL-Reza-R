<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\UserbiasaController;
use app\Http\Controllers\Proposal;
use App\Http\Controllers\KategoriController;

//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});

// untuk superadmin dan pegawai
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', [SuperadminController::class, 'index']);
    route::get('/kategori', [KategoriController::class, 'dataK']);
route::get('/tambah-kategori', [KategoriController::class, 'tambahK']);
route::post('/simpan-kategori', [KategoriController::class, 'simpanK']);
route::get('/ubah-kategori/{id}',[KategoriController::class, 'ubahK']);
route::post('/simpan-perubahan-kategori/{id}', [KategoriController::class, 'simpanUbahanK']);
route::get('/hapus-kategori/{id}', [KategoriController::class, 'hapusK']);


});


// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/userbiasa/', [UserbiasaController::class, 'index']);

    route::get('/proposal', [Proposal::class, 'dataB']);
    route::get('/tambah-proposal', [Proposal::class, 'tambahB']);
    route::post('/simpan-proposal',[Proposal::class, 'store']);
    route::get('/ubah-proposal/{id}',[Proposal::class, 'ubahbg']);
    route::get('/hapus-proposal/{id}', [Proposal::class, 'hapusB']);




});
