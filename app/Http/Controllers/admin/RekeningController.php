<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;
use App\Models\Rekening;
use Illuminate\Support\Str;

class RekeningController extends Controller
{
    public function donatur()
    {
        $data = Rekening::first();
        return view('admin.pages.rekening.donatur', [
            "data" => $data
        ]);
    }

    public function donaturSimpan(Request $request)
    {
        $update = Rekening::first();


        $update->nominal = $request->nominal;
        $update->aktif = ($request->aktif == 'on') ? 1 : 0;

        $update->save();

        return redirect()->route('donatur')->with('pesan', 'Data Berhasil di Update ');
    }


    public function index(Request $request)
    {
        $data = Rekening::first();
        return view('admin.pages.rekening.rekening', [
            "data" => $data
        ]);
    }

    public function rekeningSimpan(Request $request)
    {
        $data   =   Rekening::first();

        $data->judul = $request->judul;
        $data->nama_bank1 = $request->nama_bank1;
        $data->nomor_rekening1 = $request->nomor_rekening1;
        $data->atas_nama1 = $request->atas_nama1;
        $data->nama_bank2 = $request->nama_bank2;
        $data->nomor_rekening2 = $request->nomor_rekening2;
        $data->atas_nama2 = $request->atas_nama2;
        $data->save();


        return redirect()->route('rekening')->with('pesan', 'Berhasil Update Data');
    }
}
