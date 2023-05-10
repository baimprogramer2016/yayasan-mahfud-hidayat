<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UpdateUrl;
use App\Traits\GeneralTrait;

class UpdateUrlController extends Controller
{
    use GeneralTrait;
    public function index(Request $reques)
    {

        $dataurl = UpdateUrl::where('nama', '!=', 'logo')->get();
        $dataurllogo = UpdateUrl::where('nama', 'logo')->first();
        return view('admin.pages.update-url.index', [
            "dataurl" => $dataurl,
            "dataurllogo" => $dataurllogo
        ]);
    }

    public function update(Request $request)
    {
        $youtube = UpdateUrl::where('nama', 'youtube')->first();
        $youtube->url = $request->youtube;
        $youtube->save();

        $instagram = UpdateUrl::where('nama', 'instagram')->first();
        $instagram->url = $request->instagram;
        $instagram->save();

        $tiktok = UpdateUrl::where('nama', 'tiktok')->first();
        $tiktok->url = $request->tiktok;
        $tiktok->save();

        $facebook = UpdateUrl::where('nama', 'facebook')->first();
        $facebook->url = $request->facebook;
        $facebook->save();

        $whatsapp = UpdateUrl::where('nama', 'whatsapp')->first();
        $whatsapp->url = $request->whatsapp;
        $whatsapp->save();

        $alamat = UpdateUrl::where('nama', 'alamat')->first();
        $alamat->url = $request->alamat;
        $alamat->save();

        $email = UpdateUrl::where('nama', 'email')->first();
        $email->url = $request->email;
        $email->save();

        $telephone = UpdateUrl::where('nama', 'telephone')->first();
        $telephone->url = $request->telephone;
        $telephone->save();


        $lokasi = UpdateUrl::where('nama', 'lokasi')->first();
        $lokasi->url = $request->lokasi;
        $lokasi->save();

        $namayayasan = UpdateUrl::where('nama', 'namaperusahaan')->first();
        $namayayasan->url = $request->namaperusahaan;
        $namayayasan->save();


        $logo = UpdateUrl::where('nama', 'logo')->first();

        if ($request->image != '') {
            $type = $request->image->extension();

            if (!$this->checkType($type)) {
                return redirect()->route('update-url')->with('pesan_error', 'File Harus Gambar');
            }

            $imageName = time() . '.' . $request->image->extension();
            if ($logo->image != null || $logo->image != '') {
                unlink('images/' . $logo->image);
            }

            $request->image->move(public_path('images'), $imageName);
            $logo->url = $imageName;
            $logo->save();
        }


        sleep(3);
        return redirect()->route('update-url')->with('pesan', 'Berhasil update URL');
    }
}
