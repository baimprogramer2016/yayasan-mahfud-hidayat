<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LatarBelakang;
use Illuminate\Support\Str;
use App\Traits\GeneralTrait;

class LatarBelakangController extends Controller
{
    use GeneralTrait;

    public function index(Request $request)
    {
        $data = LatarBelakang::first();
        return view('admin.pages.latar-belakang.index', [
            "data" => $data
        ]);
    }

    public function tambah(Request $request)
    {
        return view('admin.pages.latar-belakang.tambah');
    }

    public function simpan(Request $request)
    {
        $payload = [
            "judul"     => $request->judul,
            "deskripsi" => $request->deskripsi,
            "slug"      => Str::of($request->judul)->slug('-'),
            "image"     => null
        ];

        $data   =   LatarBelakang::count();
        if ($data == 1) {
            return redirect()->route('latar-belakang')->with('pesan_error', 'Gagal, Data sudah ada Silahkan Update ');
        }

        $result =   LatarBelakang::create($payload);

        sleep(3);
        return redirect()->route('latar-belakang')->with('pesan', 'Berhasil Tambah Data');
    }

    public function edit(Request $request, $id)
    {
        $data = LatarBelakang::find($id);
        return view('admin.pages.latar-belakang.edit', [
            "data" => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data   =   LatarBelakang::find($id);

        $data->judul = $request->judul;
        $data->slug = Str::of($request->judul)->slug('-');
        $data->deskripsi = $request->deskripsi;

        $data->save();

        sleep(3);
        return redirect()->route('latar-belakang')->with('pesan', 'Berhasil Update Data');
    }

    public function image(Request $request, $id)
    {
        return view('admin.pages.latar-belakang.image', [
            "id" => $id
        ]);
    }

    public function imageSave(Request $request, $id)
    {

        $type = $request->image->extension();

        if (!$this->checkType($type)) {
            return redirect()->route('latar-belakang')->with('pesan_error', 'File Harus Gambar');
        }

        $data = LatarBelakang::find($id);

        $imageName = time() . '.' . $request->image->extension();
        if ($data->image != null || $data->image != '') {
            unlink('uploads/' . $data->image);
        }


        // Public Folder
        $request->image->move(public_path('uploads'), $imageName);

        $data->image = $imageName;
        $data->save();

        sleep(3);
        return redirect()->route('latar-belakang')->with('pesan', 'Image berhasil di Update');
    }

    public function delete($id)
    {
        $data = LatarBelakang::find($id);
        if ($data != '') {
            $data->delete();
        }
        if ($data->image != null) {
            unlink('uploads/' . $data->image);
        }

        sleep(3);
        return redirect()->route('latar-belakang')->with('pesan', 'Data berhasil di Hapus');
    }
}
