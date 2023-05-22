<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use App\Models\Pendahuluan;
use App\Models\LatarBelakang;
use App\Models\ProgramMaster;
use App\Models\ProgramDetail;
use App\Models\Struktural;
use App\Models\Team;
use App\Models\Gallery;
use App\Models\StrukturalBg;
use App\Models\UpdateUrl;
use App\Models\VideoTestimonial;
use App\Models\Rekening;

class BerandaController extends Controller
{
    public function index(Request $request)
    {
        $datapendahuluan    = Pendahuluan::first();

        $datalatarbelakang  = LatarBelakang::first();
        $dataprogrammaster  = ProgramMaster::first();
        $dataprogramdetail  = ProgramDetail::get();
        $datastruktural     = Struktural::get();
        $datateam           = Team::get();
        $datagallery        = Gallery::get();
        $dataalamat         = UpdateUrl::where('nama', 'alamat')->first();
        $dataemail          = UpdateUrl::where('nama', 'email')->first();
        $datatelephone      = UpdateUrl::where('nama', 'telephone')->first();
        $datayoutube        = UpdateUrl::where('nama', 'youtube')->first();
        $datafacebook       = UpdateUrl::where('nama', 'facebook')->first();
        $datainstagram      = UpdateUrl::where('nama', 'instagram')->first();
        $datanamaperusahaan = UpdateUrl::where('nama', 'namaperusahaan')->first();
        $datatiktok         = UpdateUrl::where('nama', 'tiktok')->first();
        $datavideotestimonial    = VideoTestimonial::get()->take(6);
        $datacompanyprofile      = Dokumen::where('kode', 1)->first();
        $dataproposal            = Dokumen::where('kode', 2)->first();
        $datalaporankeuangan     = Dokumen::where('kode', 3)->first();
        $strukturalbg            = StrukturalBg::first();
        $datarekening            = Rekening::first();



        return view('web.pages.index', [
            "datapendahuluan"   => $datapendahuluan,
            "datalatarbelakang" => $datalatarbelakang,
            "dataprogrammaster" => $dataprogrammaster,
            "dataprogramdetail" => $dataprogramdetail,
            "datastruktural"    => $datastruktural,
            "datateam"          => $datateam,
            "datagallery"       => $datagallery,
            "dataalamat"        => $dataalamat,
            "dataemail"         => $dataemail,
            "datatelephone"     => $datatelephone,
            "datayoutube"       => $datayoutube,
            "datafacebook"      => $datafacebook,
            "datainstagram"     => $datainstagram,
            "datatiktok"        => $datatiktok,
            "datastrukturalbg"  => $strukturalbg,
            "datarekening"      => $datarekening,
            "datanamaperusahaan"        => $datanamaperusahaan,
            "datavideotestimonial"      => $datavideotestimonial,
            "datacompanyprofile"        => $datacompanyprofile,
            "dataproposal"              => $dataproposal,
            "datalaporankeuangan"       => $datalaporankeuangan
        ]);
    }
    public function viewPendahuluan(Request $request)
    {
        $datapendahuluan    = Pendahuluan::first();

        return view('web.pages.detail-pendahuluan', [
            "datapendahuluan" => $datapendahuluan,
        ]);
    }
    public function viewLatarBelakang(Request $request)
    {
        $datalatarbelakang    = LatarBelakang::first();

        return view('web.pages.detail-latar-belakang', [
            "datalatarbelakang" => $datalatarbelakang,
        ]);
    }
}
