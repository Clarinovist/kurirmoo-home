<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function index()
    {
        $about =  AboutUs::first();
        return view('admin.about_us.index')->with(['about' => $about]);
    }

    public function ubah_about(Request $request , $id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // max:2048 berarti 2MB
        ], [
            'image.max' => 'Ukuran file tidak boleh melebihi 2MB.'
        ]);
          // Jika validasi gagal
        if ($validator->fails()) {
            Alert::error('Gagal', 'Data Format / Ukuran tidak sesuai');
            return redirect()->back();
        }

         // Simpan ke database
         AboutUs::where('id', $id)->update([
            'judul' => $request->judul,
            'desc' => $request->desc,
        ]);

        $dataAbout =  AboutUs::findOrFail($id);
        // Cek apakah ada file gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($dataAbout->gambar) {
                Storage::disk('public')->delete($dataAbout->gambar);
            }

            // Simpan file baru di direktori 'public/berita' dan dapatkan path
            $path = $request->file('gambar')->store('about_us', 'public');

            // Update kolom 'image' dengan path baru
            $dataAbout->gambar = $path;

        }
        // Simpan perubahan ke database (baik ada atau tidak ada gambar baru)
        $dataAbout->save();

        toast('Data Sejarah Berhasil Diubah','success');
        return redirect('/about-us-admin');
    }
}
