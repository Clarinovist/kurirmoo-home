<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Iklan;
use App\Models\Keunggulan;
use App\Models\Kontak;
use App\Models\Tutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingpageController extends Controller
{
    public function index()
    {
        $about =  AboutUs::first();
        $iklan =  Iklan::all();
        $keunggulan =  Keunggulan::all();
        $hero =  Hero::first();
        $kontak =  Kontak::first();
        $tutorial = Tutorial::all();
        $faqgeneral =Faq::where('kategori', 'General')->get();
        $faqmuatan =Faq::where('kategori', 'Kerjasama Perusahaan Pemilik Muatan')->get();
        $faqekspedisi =Faq::where('kategori', 'Kerjasama Perusahaan Pemilik Ekspedisi')->get();
        $armada = DB::table('tb_armada')
        ->join('tb_detail_armada', 'tb_armada.id_detail_armada', '=','tb_detail_armada.id')
        ->select('tb_armada.*','tb_detail_armada.*')
        ->get();

        // dd($faqgeneral);
        return view('landingpage.index')->with(['about' => $about, 'iklan' => $iklan, 'keunggulan' => $keunggulan, 'hero' => $hero, 'kontak' => $kontak, 'tutorial' => $tutorial, 'faqgeneral' => $faqgeneral, 'faqmuatan' => $faqmuatan, 'faqekspedisi' => $faqekspedisi, 'armada' => $armada]);
    }


    public function privacyPolicy()
    {
        $kontak =  Kontak::first();
        return view('landingpage.privacy_policy.privacy_policy')->with(['kontak' => $kontak]);
    }
    public function syaratKetentuan()
    {
        $kontak =  Kontak::first();
        return view('landingpage.syarat_ketentuan.syarat_ketentuan')->with(['kontak' => $kontak]);
    }
}
