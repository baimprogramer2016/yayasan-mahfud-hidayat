<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\PendahuluanController;
use App\Http\Controllers\admin\LatarBelakangController;
use App\Http\Controllers\admin\ProgramController;
use App\Http\Controllers\admin\StrukturalController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\UpdateUrlController;
use App\Http\Controllers\admin\PendaftaranController;
use App\Http\Controllers\web\BerandaController;
use App\Http\Middleware\checkLogin;

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


//ADMIN
Route::get('/login', [UserController::class,'index'])->name('login');
Route::get('/admin-dashboard', [UserController::class,'DirectDashboard'])->name('admin-dashboard')->middleware(checkLogin::class);
Route::post('/login-process', [UserController::class,'LoginProcess'])->name('login-process');
Route::get('/logout-process', [UserController::class,'Logout'])->name('logout-process');

//pendahuluan
Route::get('/pendahuluan', [PendahuluanController::class,'index'])->name('pendahuluan')->middleware(checkLogin::class);
Route::get('/tambah-pendahuluan', [PendahuluanController::class,'tambah'])->name('tambah-pendahuluan')->middleware(checkLogin::class);
Route::post('/simpan-pendahuluan', [PendahuluanController::class,'simpan'])->name('simpan-pendahuluan')->middleware(checkLogin::class);
Route::get('/edit-pendahuluan/{id}', [PendahuluanController::class,'edit'])->name('edit-pendahuluan')->middleware(checkLogin::class);
Route::post('/update-pendahuluan/{id}', [PendahuluanController::class,'update'])->name('update-pendahuluan')->middleware(checkLogin::class);
Route::get('/image-pendahuluan/{id}', [PendahuluanController::class,'image'])->name('image-pendahuluan')->middleware(checkLogin::class);
Route::post('/image-save-pendahuluan/{id}', [PendahuluanController::class,'imageSave'])->name('image-save-pendahuluan')->middleware(checkLogin::class);
Route::get('/delete-pendahuluan/{id}', [PendahuluanController::class,'delete'])->name('delete-pendahuluan')->middleware(checkLogin::class);

//latar belakang
Route::get('/latar-belakang', [LatarBelakangController::class,'index'])->name('latar-belakang')->middleware(checkLogin::class);
Route::get('/tambah-latar-belakang', [LatarBelakangController::class,'tambah'])->name('tambah-latar-belakang')->middleware(checkLogin::class);
Route::post('/simpan-latar-belakang', [LatarBelakangController::class,'simpan'])->name('simpan-latar-belakang')->middleware(checkLogin::class);
Route::get('/edit-latar-belakang/{id}', [LatarBelakangController::class,'edit'])->name('edit-latar-belakang')->middleware(checkLogin::class);
Route::post('/update-latar-belakang/{id}', [LatarBelakangController::class,'update'])->name('update-latar-belakang')->middleware(checkLogin::class);
Route::get('/image-latar-belakang/{id}', [LatarBelakangController::class,'image'])->name('image-latar-belakang')->middleware(checkLogin::class);
Route::post('/image-save-latar-belakang/{id}', [LatarBelakangController::class,'imageSave'])->name('image-save-latar-belakang')->middleware(checkLogin::class);
Route::get('/delete-latar-belakang/{id}', [LatarBelakangController::class,'delete'])->name('delete-latar-belakang')->middleware(checkLogin::class);

Route::get('/program', [ProgramController::class,'index'])->name('program')->middleware(checkLogin::class);
Route::get('/update-program-master', [ProgramController::class,'updateProgramMaster'])->name('update-program-master')->middleware(checkLogin::class);
Route::post('/simpan-program-master', [ProgramController::class,'simpanProgramMaster'])->name('simpan-program-master')->middleware(checkLogin::class);
Route::get('/tambah-program', [ProgramController::class,'tambah'])->name('tambah-program')->middleware(checkLogin::class);
Route::post('/simpan-program', [ProgramController::class,'simpan'])->name('simpan-program')->middleware(checkLogin::class);
Route::get('/edit-program/{id}', [ProgramController::class,'edit'])->name('edit-program')->middleware(checkLogin::class);
Route::post('/update-program/{id}', [ProgramController::class,'update'])->name('update-program')->middleware(checkLogin::class);
Route::get('/delete-program/{id}', [ProgramController::class,'delete'])->name('delete-program')->middleware(checkLogin::class);

Route::get('/struktural', [StrukturalController::class,'index'])->name('struktural')->middleware(checkLogin::class);
Route::get('/tambah-struktural', [StrukturalController::class,'tambah'])->name('tambah-struktural')->middleware(checkLogin::class);
Route::post('/simpan-struktural', [StrukturalController::class,'simpan'])->name('simpan-struktural')->middleware(checkLogin::class);
Route::get('/edit-struktural/{id}', [StrukturalController::class,'edit'])->name('edit-struktural')->middleware(checkLogin::class);
Route::post('/update-struktural/{id}', [StrukturalController::class,'update'])->name('update-struktural')->middleware(checkLogin::class);
Route::get('/image-struktural/{id}', [StrukturalController::class,'image'])->name('image-struktural')->middleware(checkLogin::class);
Route::post('/image-save-struktural/{id}', [StrukturalController::class,'imageSave'])->name('image-save-struktural')->middleware(checkLogin::class);
Route::get('/delete-struktural/{id}', [StrukturalController::class,'delete'])->name('delete-struktural')->middleware(checkLogin::class);

Route::get('/team', [TeamController::class,'index'])->name('team')->middleware(checkLogin::class);
Route::get('/tambah-team', [TeamController::class,'tambah'])->name('tambah-team')->middleware(checkLogin::class);
Route::post('/simpan-team', [TeamController::class,'simpan'])->name('simpan-team')->middleware(checkLogin::class);
Route::get('/edit-team/{id}', [TeamController::class,'edit'])->name('edit-team')->middleware(checkLogin::class);
Route::post('/update-team/{id}', [TeamController::class,'update'])->name('update-team')->middleware(checkLogin::class);
Route::get('/image-team/{id}', [TeamController::class,'image'])->name('image-team')->middleware(checkLogin::class);
Route::post('/image-save-team/{id}', [TeamController::class,'imageSave'])->name('image-save-team')->middleware(checkLogin::class);
Route::get('/delete-team/{id}', [TeamController::class,'delete'])->name('delete-team')->middleware(checkLogin::class);

Route::get('/gallery', [GalleryController::class,'index'])->name('gallery')->middleware(checkLogin::class);
Route::get('/tambah-gallery', [GalleryController::class,'tambah'])->name('tambah-gallery')->middleware(checkLogin::class);
Route::post('/simpan-gallery', [GalleryController::class,'simpan'])->name('simpan-gallery')->middleware(checkLogin::class);
Route::get('/edit-gallery/{id}', [GalleryController::class,'edit'])->name('edit-gallery')->middleware(checkLogin::class);
Route::post('/update-gallery/{id}', [GalleryController::class,'update'])->name('update-gallery')->middleware(checkLogin::class);
Route::get('/image-gallery/{id}', [GalleryController::class,'image'])->name('image-gallery')->middleware(checkLogin::class);
Route::post('/image-save-gallery/{id}', [GalleryController::class,'imageSave'])->name('image-save-gallery')->middleware(checkLogin::class);
Route::get('/delete-gallery/{id}', [GalleryController::class,'delete'])->name('delete-gallery')->middleware(checkLogin::class);

Route::get('/pendaftaran', [PendaftaranController::class,'index'])->name('pendaftaran')->middleware(checkLogin::class);
Route::get('/pendaftaran-detail/{id}', [PendaftaranController::class,'detail'])->name('pendaftaran-detail')->middleware(checkLogin::class);
Route::post('/pendaftaran-update-status', [PendaftaranController::class,'updateStatus'])->name('pendaftaran-update-status')->middleware(checkLogin::class);

Route::get('/update-url', [UpdateUrlController::class,'index'])->name('update-url')->middleware(checkLogin::class);
Route::post('/update-url', [UpdateUrlController::class,'update'])->name('store-url')->middleware(checkLogin::class);

//WEB
Route::get('/', [BerandaController::class,'index'])->name('beranda');
Route::get('/view-pendahuluan', [BerandaController::class,'viewPendahuluan'])->name('view-pendahuluan');
Route::get('/view-latar-belakang', [BerandaController::class,'viewLatarBelakang'])->name('view-latar-belakang');
Route::post('/pendaftaran',[PendaftaranController::class,'daftar'])->name('simpan-pendaftaranan');
Route::get('/pendaftaran-success',[PendaftaranController::class,'sukses'])->name('pendaftaran-success');




//CREATE ADMIN USER
// Route::get('/create-admin', [UserController::class, 'userAdmin'])->name('create-admin');


