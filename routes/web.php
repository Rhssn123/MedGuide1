<?php

use App\Http\Controllers\ApotekController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KategoriPenyakitController;
use App\Http\Controllers\KategoriObatController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/// Route::get('/', function () {
//    return view('front');
// });

Route::get('/', [FrontController::class, 'index']);
Route::get('show/{id}', [FrontController::class,'show']);

Route::get('loginuser', [PenggunaController::class,'loginuser']);
Route::post('postlogin', [PenggunaController::class,'postlogin']);
Route::get('logout', [PenggunaController::class,'logout']);
Route::get('register', [PenggunaController::class,'register']);
Route::post('register', [PenggunaController::class, 'storeRegister']);
Route::get('halUser', [PenggunaController::class,'halUser']);
Route::post('halUser', [PenggunaController::class,'storeRegister']);

Route::get('profileuser', [FrontController::class,'profileuser']);
Route::get('searchUser', [FrontController::class,'searchUser'])->name('searchUser');
Route::get('searchUserAutocomplete', [FrontController::class, 'searchUserAutocomplete'])->name('searchUserAutocomplete');
Route::get('kategoriPenyakit', [FrontController::class,'kategoriPenyakit']);
Route::get('kategoriObat', [FrontController::class,'kategoriObat']);
Route::get('halPenyakit', [FrontController::class,'halPenyakit']);

Route::get('dashU', [FrontController::class,'indexU']);
Route::post('dashU', [FrontController::class,'store']);
Route::get('dashUedit', [FrontController::class,'showEditForm']);
Route::get('dashUedit/{idpengguna}', [FrontController::class, 'edit']);
Route::put('dashU/{idpengguna}', [FrontController::class, 'update']);
Route::put('dashUUpProfile', [FrontController::class,'updateProfileImage']);

Route::get('saveU', [FrontController::class,'saveU']);
Route::get('saveUedit', [FrontController::class,'saveUedit']);
Route::get('tableproducts', [FrontController::class,'tableproducts']);
Route::get('favorites', [FavoriteController::class, 'index']);
Route::post('favorites', [FavoriteController::class, 'store']);
Route::delete('favorites/{id}', [FavoriteController::class, 'destroy']);
Route::post('/save-favorite', [FavoriteController::class, 'store'])->name('save.favorite');
Route::post('/api/add-favorite', [FavoriteController::class, 'addFavorite'])->name('favorites.add');
Route::post('/api/remove-favorite', [FavoriteController::class, 'removeFavorite'])->name('favorites.remove');

Route::get('riwayatU', [FrontController::class,'riwayatU']);
Route::get('signoutU', [FrontController::class,'signoutU']);

Route::get('profileadmin', [FrontController::class,'profileadmin']);
Route::get('admin', [AuthController::class,'index']);
Route::get('admin/postlogin', [AuthController::class,'postlogin']);

Route::group(['prefix'=>'admin'], function(){
    Route::resource('kategorisp',KategoriPenyakitController::class);
});

Route::get('dashA', [PenggunaController::class,'index']);
Route::post('dashA', [PenggunaController::class,'store']);
Route::get('dashAadd', [PenggunaController::class,'showAddForm']);
Route::get('dashAedit', [PenggunaController::class,'showEditForm']);
Route::get('dashAedit/{idpengguna}', [PenggunaController::class, 'edit']);
Route::put('dashA/{idpengguna}', [PenggunaController::class, 'update']);
Route::delete('destroy.dashA/{idpengguna}', [PenggunaController::class, 'destroy']);

Route::get('apotekU', [ApotekController::class,'apotekU']);

Route::get('apotekA', [ApotekController::class,'index']);
Route::post('apotekA', [ApotekController::class,'store']);
Route::get('apotekAadd', [ApotekController::class,'showAddForm']);
Route::get('apotekAedit', [ApotekController::class,'showEditForm']);
Route::get('apotekAedit/{idkategori}', [ApotekController::class, 'edit']);
Route::put('apotekAedit/{idkategori}', [ApotekController::class, 'update']);
Route::delete('destroyApotek/{idkategori}', [ApotekController::class, 'destroy']);

Route::get('admin.list-obatA', [KategoriObatController::class, 'indexListObat']);
Route::get('admin.obatA', [KategoriObatController::class, 'index']);
Route::post('admin.obatA', [KategoriObatController::class, 'store']);
Route::get('admin.obatAadd', [KategoriObatController::class, 'showAddForm']);
Route::get('admin.obatAedit/{idkategori}', [KategoriObatController::class, 'edit']);
Route::put('admin.obatAedit/{idkategori}', [KategoriObatController::class, 'update']);
Route::delete('destroy.obatA/{idkategori}', [KategoriObatController::class, 'destroy']);

Route::get('admin.list-penyakitA', [KategoriPenyakitController::class,'indexListPenyakit']);
Route::get('admin.penyakitA', [KategoriPenyakitController::class, 'index']);
Route::post('admin.penyakitA', [KategoriPenyakitController::class, 'store']);
Route::get('admin.penyakitAadd', [KategoriPenyakitController::class, 'showAddForm']);
Route::get('admin.penyakitAedit/{idkategori}', [KategoriPenyakitController::class, 'edit']);
Route::put('admin.penyakitAedit/{idkategori}', [KategoriPenyakitController::class, 'update']);
Route::delete('destroyPenyakit/{idkategori}', [KategoriPenyakitController::class, 'destroy']);

Route::get('riwayatA', [RiwayatController::class,'index']);
Route::post('riwayatA', [RiwayatController::class,'store']);
Route::get('riwayatAadd', [RiwayatController::class,'showAddForm']);
Route::get('riwayatAedit', [RiwayatController::class,'showEditForm']);
Route::get('riwayatAedit/{idpengguna}', [RiwayatController::class, 'edit']);
Route::put('riwayatA/{idpengguna}', [RiwayatController::class, 'update']);
Route::delete('destroy.riwayatA/{idpengguna}', [RiwayatController::class, 'destroy']);

Route::get('signoutA', [FrontController::class,'signoutA']);


