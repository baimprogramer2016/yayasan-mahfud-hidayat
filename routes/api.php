<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Pendaftaran;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/pendaftaran-store', function (Request $request) {
    $payload = [
        "nama_siswa" => $request->nama_siswa,
        "kelas" => $request->kelas,
        "sekolah" => $request->sekolah,
        "tgl_lahir" => $request->tgl_lahir,
        "nama_orang_tua" => $request->nama_orang_tua,
        "nomor_hp" => $request->nomor_hp,
        "nomor_ktp" => $request->nomor_ktp,
        "pesan" => $request->pesan,

        "status" => 'N',
    ];

    // $request->image->move(public_path('uploads/ktp'), $imageName);
    Pendaftaran::create($payload);

    sleep(3);
    return redirect()->route('pendaftaran-success')->with('pesan', 'Pendaftaran Berhasil, Kami akan menghubungi anda kembali melalui Nomor Handphone yang telah di daftarkan, Terima Kasih');
})->name('pendaftaran-store');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
