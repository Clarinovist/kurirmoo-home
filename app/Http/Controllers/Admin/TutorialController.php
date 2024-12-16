<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class TutorialController extends Controller
{
    public function index()
    {
        $tutorial =  Tutorial::all();
        return view('admin.tutorial.tutorial')->with(['tutorial' => $tutorial]);
    }

    public function tambah_tutorial(Request $request)
    {
        // dd($request->all());
        Tutorial::insert([
            'nama' => $request->nama,
            'link_youtube' => $request->link_youtube,
        ]);

    toast('Data Tutorial Berhasil Ditambah','success');
    return redirect('/tutorial-admin');
    }

    public function ubah_tutorial(Request $request , $id)
    {
        // dd($request->all());

         // Simpan ke database
         Tutorial::where('id', $id)->update([
            'nama' => $request->nama,
            'link_youtube' => $request->link_youtube,
        ]);

        toast('Data Tutorial Berhasil Diubah','success');
        return redirect('/tutorial-admin');
    }

    public function hapus_tutorial($id)
    {
        Tutorial::where('id', $id)->delete();

        toast('Data Tutorial Kurirmoo Berhasil Dihapus','error');
        return redirect('/tutorial-admin');
    }
}
