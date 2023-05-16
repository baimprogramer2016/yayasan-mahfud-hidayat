<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\GeneralTrait;
use App\Models\StrukturalBg;
use Illuminate\Support\Str;

class StrukturalBgController extends Controller
{
    use GeneralTrait;
    public function index(Request $request)
    {
        $data = StrukturalBg::first();
        return view('admin.pages.struktural-bg.index', [
            "data" => $data
        ]);
    }

    public function tambah(Request $request)
    {
        return view('admin.pages.struktural-bg.tambah');
    }

    public function simpan(Request $request)
    {
        $payload = [
            "judul"     => $request->judul,
            "deskripsi" => $request->deskripsi,
            "slug"      => Str::of($request->judul)->slug('-'),
            "image"     => null
        ];

        $data   =   StrukturalBg::count();
        if ($data == 1) {
            return redirect()->route('pendahuluan')->with('pesan_error', 'Gagal, Data sudah ada Silahkan Update ');
        }

        $result =   StrukturalBg::create($payload);

        sleep(3);
        return redirect()->route('pendahuluan')->with('pesan', 'Berhasil Tambah Data');
    }

    public function edit(Request $request, $id)
    {
        $data = StrukturalBg::find($id);
        return view('admin.pages.struktural-bg.edit', [
            "data" => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data   =   StrukturalBg::find($id);

        $data->judul = $request->judul;
        $data->slug = Str::of($request->judul)->slug('-');
        $data->deskripsi = $request->deskripsi;

        $data->save();

        sleep(3);
        return redirect()->route('pendahuluan')->with('pesan', 'Berhasil Update Data');
    }

    public function image(Request $request, $id)
    {
        return view('admin.pages.struktural-bg.image', [
            "id" => $id
        ]);
    }

    public function imageSave(Request $request, $id)
    {

        $type = $request->image->extension();

        if (!$this->checkType($type)) {
            return redirect()->route('pendahuluan')->with('pesan_error', 'File Harus Gambar');
        }

        $data = StrukturalBg::find($id);

        $imageName = time() . '.' . $request->image->extension();

        if ($data->image != null || $data->image != '') {
            unlink('uploads/' . $data->image);
        }

        // Public Folder
        $request->image->move(public_path('uploads'), $imageName);


        $data->image = $imageName;
        $data->save();

        sleep(3);

        return redirect()->route('pendahuluan')->with('pesan', 'Image berhasil di Update');
    }

    public function delete($id)
    {
        $data = StrukturalBg::find($id);
        if ($data != '') {
            $data->delete();
        }
        if ($data->image != null) {
            unlink('uploads/' . $data->image);
        }

        sleep(3);
        return redirect()->route('pendahuluan')->with('pesan', 'Data berhasil di Hapus');
    }
}
