<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Traits\GeneralTrait;

class GalleryController extends Controller
{

    use GeneralTrait;
    public function index(Request $request)
    {
        $data = Gallery::get();

        return view('admin.pages.gallery.index', [
            "data" => $data
        ]);
    }


    public function tambah(Request $request)
    {
        return view('admin.pages.gallery.tambah');
    }

    public function simpan(Request $request)
    {
        $type = $request->image->extension();

        if (!$this->checkType($type)) {
            return redirect()->route('gallery')->with('pesan_error', 'File Harus Gambar');
        }

        $imageName = time() . '.' . $request->image->extension();

        $upload = $request->image->move(public_path('uploads'), $imageName);

        $payload = [
            "judul"     => $request->judul,
            "image"     => $imageName
        ];


        $result =   Gallery::create($payload);

        sleep(3);
        return redirect()->route('gallery')->with('pesan', 'Berhasil Tambah Data');
    }

    public function edit(Request $request, $id)
    {
        $data = Gallery::find($id);
        return view('admin.pages.gallery.edit', [
            "data" => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data   =   Gallery::find($id);

        $data->judul = $request->judul;
        $data->save();

        sleep(3);
        return redirect()->route('gallery')->with('pesan', 'Berhasil Update Data');
    }

    public function image(Request $request, $id)
    {
        $data   =   Gallery::find($id);

        return view('admin.pages.gallery.image', [
            "data" => $data
        ]);
    }

    public function imageSave(Request $request, $id)
    {

        $type = $request->image->extension();

        if (!$this->checkType($type)) {
            return redirect()->route('gallery')->with('pesan_error', 'File Harus Gambar');
        }

        $data = Gallery::find($id);

        $imageName = time() . '.' . $request->image->extension();
        if ($data->image != null || $data->image != '') {
            unlink('uploads/' . $data->image);
        }


        // Public Folder
        $upload = $request->image->move(public_path('uploads'), $imageName);

        $data->image = $imageName;
        $data->save();

        sleep(3);

        return redirect()->route('gallery')->with('pesan', 'Image berhasil di Update');
    }

    public function delete($id)
    {
        $data = Gallery::find($id);
        if ($data != '') {
            $data->delete();
        }
        if ($data->image != null) {
            unlink('uploads/' . $data->image);
        }

        sleep(3);
        return redirect()->route('gallery')->with('pesan', 'Data berhasil di Hapus');
    }
}
