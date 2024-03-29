<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Traits\GeneralTrait;

class PendaftaranController extends Controller
{

    use GeneralTrait;
    //admin
    public function index(Request $request)
    {

        $data = Pendaftaran::when($request->has('btnsearch'), function ($query) use ($request) {
            return $query->where('nama_siswa', 'like', '%' . $request->search_nama . '%');
        })->when($request->search_status != '', function ($query) use ($request) {
            return $query->where('status', '=', $request->search_status);
        })
            ->paginate(20);


        foreach ($data as $item_status) {
            $item_status->status_description = $this->descStatus($item_status->status);
            $item_status->status_color = $this->descColor($item_status->status);
        }

        return view('admin.pages.pendaftaran.index', [
            "data" => $data,
        ]);
    }

    public function detail(Request $request, $id)
    {
        $data = Pendaftaran::find($id);

        return view('admin.pages.pendaftaran.detail', [
            "data" => $data
        ]);
    }

    public function updateStatus(Request $request)
    {
        $update  = Pendaftaran::find($request->id);
        $update->status = $request->status;
        $update->save();
        $response = [
            "description" => $this->descStatus($request->status),
            "desccolor" => $this->descColor($request->status),
        ];
        return $response;
    }




    //web
    public function daftar(Request $request)
    {

        // $type = $request->image->extension();

        // if (!$this->checkType($type)) {
        //     return back()->with('pesan_error', 'File Harus Gambar');
        // }

        // $imageName = time() . '.' . $request->image->extension();



        // "file_ktp" => $imageName,
        $payload = [
            "nama_siswa" => $request->nama_siswa,
            "kelas" => $request->kelas,
            "sekolah" => $request->sekolah,
            "tgl_lahir" => $request->tgl_lahir,
            "nama_orang_tua" => $request->nama_orang_tua,
            "nomor_hp" => $request->nomor_hp,
            "nomor_ktp" => $request->nomor_ktp,
            "pesan" => $request->pesan,
            "status" => 'N',
        ];

        // $request->image->move(public_path('uploads/ktp'), $imageName);
        Pendaftaran::create($payload);

        sleep(3);
        return redirect()->route('pendaftaran-success')->with('pesan', 'Pendaftaran Berhasil, Kami akan menghubungi anda kembali melalui Nomor Handphone yang telah di daftarkan, Terima Kasih');
    }

    public function sukses(Request $request)
    {
        return view('web.pages.success');
    }
}
