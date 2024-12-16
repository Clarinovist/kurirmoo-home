<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Tutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    public function index()
    {
        $faq =  Faq::all();
        return view('admin.faq.faq')->with(['faq' => $faq]);
    }

    public function tambah_faq(Request $request)
    {
        // dd($request->all());
        Faq::insert([
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
            'kategori' => $request->kategori,
            'created_at' => now(),
             'updated_at' => now(),
        ]);

    toast('Data Faq Berhasil Ditambah','success');
    return redirect('/faq-admin');
    }

    public function ubah_faq(Request $request , $id)
    {
        // dd($request->all());

         // Simpan ke database
         Faq::where('id', $id)->update([
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
            'kategori' => $request->kategori,
        ]);

        toast('Data Faq Berhasil Diubah','success');
        return redirect('/faq-admin');
    }

    public function hapus_faq($id)
    {
        Faq::where('id', $id)->delete();

        toast('Data Faq Kurirmoo Berhasil Dihapus','error');
        return redirect('/faq-admin');
    }
}
