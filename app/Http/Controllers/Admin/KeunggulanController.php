<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Keunggulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeunggulanController extends Controller
{
    public function index()
    {
        $keunggulan =  Keunggulan::all();
        return view('admin.keunggulan.keunggulan')->with(['keunggulan' => $keunggulan]);
    }
    public function tambah_keunggulan(Request $request)
    {
        // dd($request->all());
        Keunggulan::insert([
                [
                'nama' => $request->nama,
                'desc' => $request->desc,
                'icon' => $request->icon,
                'created_at' => now(),
                'updated_at' => now(),
                ],
            ]);

        toast('Data keunggulan Kurirmoo Berhasil Ditambah','success');
        return redirect('/keunggulan-admin');
    }
    public function ubah_keunggulan(Request $request, $id)
    {
        // Simpan ke database
        Keunggulan::where('id', $id)->update([
                'nama' => $request->nama,
                'desc' => $request->desc,
                'icon' => $request->icon,
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        toast('Data keunggulan Kurirmoo Berhasil Diubah','success');
         return redirect('/keunggulan-admin');
    }

    public function hapus_keunggulan($id)
    {
            Keunggulan::where('id', $id)->delete();

        toast('Data Keunggulan Kurirmoo Berhasil Dihapus','error');
        return redirect('/keunggulan-admin');
    }

}