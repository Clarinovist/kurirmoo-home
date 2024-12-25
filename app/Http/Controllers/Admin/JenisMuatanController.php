<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisMuatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class JenisMuatanController extends Controller
{
    public function index()
    {
        $jenisMuatan =  JenisMuatan::all();
        return view('admin.jenismuatan.jenismuatan')->with(['jenisMuatan' => $jenisMuatan]);
    }
    public function tambah_jenismuatan(Request $request)
    {
        // dd($request->all());
        JenisMuatan::insert([
                [
                'judul' => $request->judul,
                'desc' => $request->desc,
                'icon' => $request->icon,
                'created_at' => now(),
                'updated_at' => now(),
                ],
            ]);

        toast('Data Jenis Muatan Kurirmoo Berhasil Ditambah','success');
        return redirect('/jenismuatan-admin');
    }
    public function ubah_jenismuatan(Request $request, $id)
    {
        // Simpan ke database
        JenisMuatan::where('id', $id)->update([
                'judul' => $request->judul,
                'desc' => $request->desc,
                'icon' => $request->icon,
                'created_at' => now(),
                'updated_at' => now(),
        ]);

        toast('Data Jenis Muatan Kurirmoo Berhasil Diubah','success');
         return redirect('/jenismuatan-admin');
    }

    public function hapus_jenismuatan($id)
    {
            JenisMuatan::where('id', $id)->delete();

        toast('Data Jenis Muatan Kurirmoo Berhasil Dihapus','error');
        return redirect('/jenismuatan-admin');
    }

}
