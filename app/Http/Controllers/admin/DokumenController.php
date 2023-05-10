<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;
use App\Models\Dokumen;

class DokumenController extends Controller
{

    use GeneralTrait;
    public function index(Request $request)
    {
        $data = Dokumen::get();

        return view('admin.pages.dokumen.index', [
            "data" => $data
        ]);
    }


    public function tambah(Request $request)
    {
        return view('admin.pages.dokumen.tambah');
    }

    public function simpan(Request $request)
    {
        $type = $request->file_docs->extension();

        if (!$this->checkTypePdf($type)) {
            return redirect()->route('dokumen')->with('pesan_error', 'File Harus PDF');
        }

        $imageName = time() . '.' . $request->file_docs->extension();

        $request->file_docs->move(public_path('file_docs'), $imageName);

        $payload = [
            "kode"     => $request->kode,
            "nama"     => $this->namaDoc($request->kode),
            "FILE"     => $imageName
        ];


        Dokumen::create($payload);

        sleep(3);
        return redirect()->route('dokumen')->with('pesan', 'Berhasil Tambah Data');
    }

    public function edit(Request $request, $id)
    {
        $data = Dokumen::find($id);
        return view('admin.pages.dokumen.edit', [
            "data" => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data   =   Dokumen::find($id);

        $data->kode = $request->kode;
        $data->nama = $this->namaDoc($request->kode);
        $data->save();

        sleep(3);
        return redirect()->route('dokumen')->with('pesan', 'Berhasil Update Data');
    }

    public function dokumen(Request $request, $id)
    {
        $data   =   Dokumen::find($id);

        return view('admin.pages.dokumen.dokumen', [
            "data" => $data
        ]);
    }

    public function fileSave(Request $request, $id)
    {

        $type = $request->file_docs->extension();

        if (!$this->checkTypePdf($type)) {
            return redirect()->route('dokumen')->with('pesan_error', 'File Harus PDF');
        }

        $data = Dokumen::find($id);

        $imageName = time() . '.' . $request->file_docs->extension();
        if ($data->FILE != '' || $data->FILE != null) {
            $imageName = $data->FILE;
        }

        // Public Folder
        $request->file_docs->move(public_path('file_docs'), $imageName);

        $data->FILE = $imageName;
        $data->save();

        sleep(3);
        return redirect()->route('dokumen')->with('pesan', 'Dokumen berhasil di Update');
    }

    public function delete($id)
    {
        $data = Dokumen::find($id);
        if ($data != '') {
            $data->delete();
        }
        if ($data->FILE != null || $data->FILE != '') {
            unlink('file_docs/' . $data->FILE);
        }

        sleep(3);
        return redirect()->route('dokumen')->with('pesan', 'Data berhasil di Hapus');
    }
}
