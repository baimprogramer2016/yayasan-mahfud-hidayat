<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Struktural;
use App\Traits\GeneralTrait;

class StrukturalController extends Controller
{
    use GeneralTrait;
    public function index(Request $request)
    {
        $data = Struktural::get();

        return view('admin.pages.struktural.index', [
            "data" => $data
        ]);
    }


    public function tambah(Request $request)
    {
        return view('admin.pages.struktural.tambah');
    }

    public function simpan(Request $request)
    {
        $payload = [
            "nama"     => $request->nama,
            "jabatan" => $request->jabatan,
            "kutipan" => $request->kutipan,
            "image"     => null
        ];

        $result =   Struktural::create($payload);
        sleep(3);
        return redirect()->route('struktural')->with('pesan', 'Berhasil Tambah Data');
    }

    public function edit(Request $request, $id)
    {
        $data = Struktural::find($id);
        return view('admin.pages.struktural.edit', [
            "data" => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data   =   Struktural::find($id);

        $data->nama = $request->nama;
        $data->jabatan = $request->jabatan;
        $data->kutipan = $request->kutipan;

        $data->save();
        sleep(3);

        return redirect()->route('struktural')->with('pesan', 'Berhasil Update Data');
    }

    public function image(Request $request, $id)
    {
        return view('admin.pages.struktural.image', [
            "id" => $id
        ]);
    }

    public function imageSave(Request $request, $id)
    {

        $type = $request->image->extension();

        if (!$this->checkType($type)) {
            return redirect()->route('struktural')->with('pesan_error', 'File Harus Gambar');
        }

        $data = Struktural::find($id);

        $imageName = time() . '.' . $request->image->extension();
        if ($data->image != null || $data->image != '') {
            unlink('uploads/' . $data->image);
        }


        // Public Folder
        $upload = $request->image->move(public_path('uploads'), $imageName);

        $data->image = $imageName;
        $data->save();

        sleep(3);
        return redirect()->route('struktural')->with('pesan', 'Image berhasil di Update');
    }

    public function delete($id)
    {
        $data = Struktural::find($id);
        if ($data != '') {
            $data->delete();
        }
        if ($data->image != null) {
            unlink('uploads/' . $data->image);
        }

        sleep(3);
        return redirect()->route('struktural')->with('pesan', 'Data berhasil di Hapus');
    }
}
