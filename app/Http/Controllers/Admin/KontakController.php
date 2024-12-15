<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class KontakController extends Controller
{
    public function index()
    {
        $kontak =  Kontak::first();
        return view('admin.kontak.kontak')->with(['kontak' => $kontak]);
    }

    public function ubah_kontak(Request $request , $id)
    {
        // dd($request->all());

         // Simpan ke database
         Kontak::where('id', $id)->update([
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'email' => $request->email,
            'playstore' => $request->playstore,
        ]);

        toast('Data Kontak Berhasil Diubah','success');
        return redirect('/kontak-admin');
    }
}
