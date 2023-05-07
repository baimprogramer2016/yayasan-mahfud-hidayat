<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Traits\GeneralTrait;

class TeamController extends Controller
{
    use GeneralTrait;
    public function index(Request $request)
    {
        $data = Team::get();

        return view('admin.pages.team.index', [
            "data" => $data
        ]);
    }


    public function tambah(Request $request)
    {
        return view('admin.pages.team.tambah');
    }

    public function simpan(Request $request)
    {
        $payload = [
            "nama"     => $request->nama,
            "jabatan" => $request->jabatan,
            "image"     => null
        ];


        $result =   Team::create($payload);
        return redirect()->route('team')->with('pesan', 'Berhasil Tambah Data');
    }

    public function edit(Request $request, $id)
    {
        $data = Team::find($id);
        return view('admin.pages.team.edit', [
            "data" => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data   =   Team::find($id);

        $data->nama = $request->nama;
        $data->jabatan = $request->jabatan;

        $data->save();

        return redirect()->route('team')->with('pesan', 'Berhasil Update Data');
    }

    public function image(Request $request, $id)
    {
        return view('admin.pages.team.image', [
            "id" => $id
        ]);
    }

    public function imageSave(Request $request, $id)
    {

        $type = $request->image->extension();

        if (!$this->checkType($type)) {
            return redirect()->route('team')->with('pesan_error', 'File Harus Gambar');
        }

        $data = Team::find($id);

        $imageName = time() . '.' . $request->image->extension();
        if ($data->image != '') {
            $imageName = $data->image;
        }

        // Public Folder
        $upload = $request->image->move(public_path('uploads'), $imageName);

        $data->image = $imageName;
        $data->save();

        return redirect()->route('team')->with('pesan', 'Image berhasil di Update');
    }

    public function delete($id)
    {
        $data = Team::find($id);
        if ($data != '') {
            $data->delete();
        }
        if ($data->image != null) {
            unlink('uploads/' . $data->image);
        }


        return redirect()->route('team')->with('pesan', 'Data berhasil di Hapus');
    }
}
