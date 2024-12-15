<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Iklan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class IklanController extends Controller
{
    public function index()
    {
        $iklan =  Iklan::all();
        return view('admin.iklan.iklan')->with(['iklan' => $iklan]);
    }

    public function tambah_iklan(Request $request)
    {
        // dd($request->all());

        // Validasi
        $validator = Validator::make($request->all(), [
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // max:2048 berarti 2MB
        ], [
            'gambar.max' => 'Ukuran file tidak boleh melebihi 2MB.'
        ]);
          // Jika validasi gagal
        if ($validator->fails()) {
            Alert::error('Gagal', 'Data Format / Ukuran tidak sesuai');
            return redirect()->back();
        }

        if ($request->hasFile('gambar')) {
            // Simpan file ke direktori 'public/photos' dan dapatkan nama file yang disimpan
            $path = $request->file('gambar')->store('iklan', 'public');
            // Buat data baru di database
            DB::table('tb_iklan')->insert([
                [
                'gambar' => $path,
                'link' => $request->link,
                'created_at' => now(),
                'updated_at' => now(),
                ],
            ]);
        }

        toast('Data Iklan Berhasil Ditambah','success');
        return redirect('/iklan-admin');
    }
    public function ubah_iklan(Request $request , $id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // max:2048 berarti 2MB
        ], [
            'gambar.max' => 'Ukuran file tidak boleh melebihi 2MB.'
        ]);
          // Jika validasi gagal
        if ($validator->fails()) {
            Alert::error('Gagal', 'Data Format / Ukuran tidak sesuai');
            return redirect()->back();
        }

         // Simpan ke database
         Iklan::where('id', $id)->update([
             'link' => $request->link,
        ]);

        $dataIklan =  Iklan::findOrFail($id);
        // Cek apakah ada file gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($dataIklan->gambar) {
                Storage::disk('public')->delete($dataIklan->gambar);
            }

            // Simpan file baru di direktori 'public/berita' dan dapatkan path
            $path = $request->file('gambar')->store('iklan', 'public');

            // Update kolom 'image' dengan path baru
            $dataIklan->gambar = $path;

        }
        // Simpan perubahan ke database (baik ada atau tidak ada gambar baru)
        $dataIklan->save();

        toast('Data Iklan Berhasil Diubah','success');
        return redirect('/iklan-admin');
    }

    public function hapus_iklan($id)
    {
        $dataIklan =  Iklan::where('id', $id)->first();
            Storage::disk('public')->delete($dataIklan->gambar);

            Iklan::where('id', $id)->delete();

        toast('Data Iklan Berhasil Dihapus','error');
        return redirect('/iklan-admin');
    }
}
