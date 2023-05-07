<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramMaster;
use App\Models\ProgramDetail;
use Illuminate\Support\Str;
use App\Traits\GeneralTrait;

class ProgramController extends Controller
{
    use GeneralTrait;
    public function index(Request $request)
    {
        $data = ProgramDetail::get();
        return view('admin.pages.program.index', [
            "data" => $data
        ]);
    }

    public function updateProgramMaster(Request $request)
    {
        $datamaster = ProgramMaster::first();

        return view('admin.pages.program.update-master', [
            "datamaster" => $datamaster
        ]);
    }

    public function simpanProgramMaster(Request $request)
    {

        $payload = [
            "judul"     => $request->judul,
            "deskripsi" => $request->deskripsi,
            "slug"      => Str::of($request->judul)->slug('-'),
        ];
        //ambil nama image
        $data = ProgramMaster::first();

        if ($request->image != '') {
            $type = $request->image->extension();

            if (!$this->checkType($type)) {
                return redirect()->route('program')->with('pesan_error', 'File Harus Gambar');
            }

            $imageName = time() . '.' . $request->image->extension();

            if ($data->image != '') {
                $imageName = $data->image;
            }
            $upload = $request->image->move(public_path('uploads'), $imageName);
            $payload['image'] = $imageName;
        } else {
            $imageName = $data->image;
            $payload['image'] = $imageName;
        }

        ProgramMaster::truncate();
        $result =   ProgramMaster::create($payload);
        return redirect()->route('program')->with('pesan', 'Berhasil Update Master Program');
    }


    public function tambah(Request $request)
    {
        return view('admin.pages.program.tambah');
    }

    public function simpan(Request $request)
    {
        $payload = [
            "judul"     => $request->judul,
            "deskripsi" => $request->deskripsi,
            "slug"      => Str::of($request->judul)->slug('-'),
        ];

        $result =   ProgramDetail::create($payload);
        return redirect()->route('program')->with('pesan', 'Berhasil Tambah Data');
    }

    public function edit(Request $request, $id)
    {
        $data = ProgramDetail::find($id);
        return view('admin.pages.program.edit', [
            "data" => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data   =   ProgramDetail::find($id);

        $data->judul = $request->judul;
        $data->slug = Str::of($request->judul)->slug('-');
        $data->deskripsi = $request->deskripsi;

        $data->save();

        return redirect()->route('program')->with('pesan', 'Berhasil Update Data');
    }

    public function image(Request $request, $id)
    {
        return view('admin.pages.program.image', [
            "id" => $id
        ]);
    }

    public function imageSave(Request $request, $id)
    {

        $type = $request->image->extension();

        if (!$this->checkType($type)) {
            return redirect()->route('program')->with('pesan_error', 'File Harus Gambar');
        }

        $data = ProgramDetail::find($id);

        $imageName = time() . '.' . $request->image->extension();
        if ($data->image != '') {
            $imageName = $data->image;
        }

        // Public Folder
        $upload = $request->image->move(public_path('uploads'), $imageName);

        $data->image = $imageName;
        $data->save();

        return redirect()->route('program')->with('pesan', 'Image berhasil di Update');
    }

    public function delete($id)
    {
        $data = ProgramDetail::find($id);
        if ($data != '') {
            $data->delete();
        }
        // if($data->image != null)
        // {
        //     unlink('uploads/'.$data->image);
        // }


        return redirect()->route('program')->with('pesan', 'Data berhasil di Hapus');
    }
}
