<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $about =  AboutUs::first();
        return view('landingpage.index')->with(['about' => $about]);
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
