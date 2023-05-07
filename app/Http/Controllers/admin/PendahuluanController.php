<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pendahuluan;
use App\Traits\GeneralTrait;

class PendahuluanController extends Controller
{
    use GeneralTrait;
    public function index(Request $request)
    {
        $data = Pendahuluan::first();
        return view('admin.pages.pendahuluan.index', [
            "data" => $data
        ]);
    }

    public function tambah(Request $request)
    {
        return view('admin.pages.pendahuluan.tambah');
    }

    public function simpan(Request $request)
    {
        $payload = [
            "judul"     => $request->judul,
            "deskripsi" => $request->deskripsi,
            "slug"      => Str::of($request->judul)->slug('-'),
            "image"     => null
        ];

        $data   =   Pendahuluan::count();
        if ($data == 1) {
            return redirect()->route('pendahuluan')->with('pesan_error', 'Gagal, Data sudah ada Silahkan Update ');
        }

        $result =   Pendahuluan::create($payload);
        return redirect()->route('pendahuluan')->with('pesan', 'Berhasil Tambah Data');
    }

    public function edit(Request $request, $id)
    {
        $data = Pendahuluan::find($id);
        return view('admin.pages.pendahuluan.edit', [
            "data" => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data   =   Pendahuluan::find($id);

        $data->judul = $request->judul;
        $data->slug = Str::of($request->judul)->slug('-');
        $data->deskripsi = $request->deskripsi;

        $data->save();

        return redirect()->route('pendahuluan')->with('pesan', 'Berhasil Update Data');
    }

    public function image(Request $request, $id)
    {
        return view('admin.pages.pendahuluan.image', [
            "id" => $id
        ]);
    }

    public function imageSave(Request $request, $id)
    {

        $type = $request->image->extension();

        if (!$this->checkType($type)) {
            return redirect()->route('pendahuluan')->with('pesan_error', 'File Harus Gambar');
        }

        $data = Pendahuluan::find($id);

        $imageName = time() . '.' . $request->image->extension();
        if ($data->image != '') {
            $imageName = $data->image;
        }

        // Public Folder
        $upload = $request->image->move(public_path('uploads'), $imageName);

        $data->image = $imageName;
        $data->save();

        return redirect()->route('pendahuluan')->with('pesan', 'Image berhasil di Update');
    }

    public function delete($id)
    {
        $data = Pendahuluan::find($id);
        if ($data != '') {
            $data->delete();
        }
        if ($data->image != null) {
            unlink('uploads/' . $data->image);
        }


        return redirect()->route('pendahuluan')->with('pesan', 'Data berhasil di Hapus');
    }
}
