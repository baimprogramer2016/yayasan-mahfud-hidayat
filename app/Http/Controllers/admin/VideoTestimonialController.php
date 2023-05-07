<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoTestimonial;

class VideoTestimonialController extends Controller
{
    public function index(Request $request)
    {
        $data = VideoTestimonial::get();
        return view('admin.pages.video-testimonial.index', [
            "data" => $data
        ]);
    }

    public function tambah(Request $request)
    {
        return view('admin.pages.video-testimonial.tambah');
    }

    public function simpan(Request $request)
    {
        $payload = [
            "judul"     => $request->judul,
            "url"       => $request->url
        ];

        $result =   VideoTestimonial::create($payload);
        return redirect()->route('video-testimonial')->with('pesan', 'Berhasil Tambah Data');
    }

    public function delete($id)
    {
        $data = VideoTestimonial::find($id);
        if ($data != '') {
            $data->delete();
        }


        return redirect()->route('video-testimonial')->with('pesan', 'Data berhasil di Hapus');
    }
}
