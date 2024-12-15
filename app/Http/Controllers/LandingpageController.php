<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Hero;
use App\Models\Iklan;
use App\Models\Keunggulan;
use App\Models\Kontak;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $about =  AboutUs::first();
        $iklan =  Iklan::all();
        $keunggulan =  Keunggulan::all();
        $hero =  Hero::first();
        $kontak =  Kontak::first();
        return view('landingpage.index')->with(['about' => $about, 'iklan' => $iklan, 'keunggulan' => $keunggulan, 'hero' => $hero, 'kontak' => $kontak]);
    }


    public function privacyPolicy()
    {
        return view('landingpage.privacy_policy.privacy_policy');
    }
    public function syaratKetentuan()
    {
        return view('landingpage.syarat_ketentuan.syarat_ketentuan');
    }
}
