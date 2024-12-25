<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Artikel;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Iklan;
use App\Models\JenisMuatan;
use App\Models\Keunggulan;
use App\Models\Kontak;
use App\Models\Tutorial;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingpageController extends Controller
{
    public function index(Request $request)
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
        $jenismuatan =JenisMuatan::all();
        $artikel =Artikel::all();
        $armada = DB::table('tb_armada')
        ->join('tb_detail_armada', 'tb_armada.id_detail_armada', '=','tb_detail_armada.id')
        ->select('tb_armada.*','tb_detail_armada.*')
        ->get();

        Visitor::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'url' => $request->fullUrl(),
        ]);

        return view('landingpage.index')->with(['about' => $about, 'iklan' => $iklan, 'keunggulan' => $keunggulan, 'hero' => $hero, 'kontak' => $kontak, 'tutorial' => $tutorial, 'faqgeneral' => $faqgeneral, 'faqmuatan' => $faqmuatan, 'faqekspedisi' => $faqekspedisi, 'armada' => $armada, 'jenismuatan' => $jenismuatan, 'artikel' => $artikel]);
    }


    public function privacyPolicy(Request $request)
    {
        $hero =  Hero::first();
        $kontak =  Kontak::first();
        Visitor::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'url' => $request->fullUrl(),
        ]);
        return view('landingpage.privacy_policy.privacy_policy')->with(['kontak' => $kontak, 'hero' => $hero]);
    }
    public function syaratKetentuan(Request $request)
    {
        $hero =  Hero::first();
        $kontak =  Kontak::first();
        Visitor::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'url' => $request->fullUrl(),
        ]);
        return view('landingpage.syarat_ketentuan.syarat_ketentuan')->with(['kontak' => $kontak, 'hero' => $hero]);
    }

    public function detailArtikel(request $request, $id)
    {
        $kontak =  Kontak::first();
        $hero =  Hero::first();
        $artikel =Artikel::where('id', $id)->first();
        Visitor::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'url' => $request->fullUrl(),
        ]);
        // dd($artikel);
        return view('landingpage.artikel.detail_artikel')->with(['kontak' => $kontak, 'artikel' => $artikel, 'hero' => $hero]);
    }
}
