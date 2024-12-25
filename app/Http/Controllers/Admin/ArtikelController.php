<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel =  Artikel::all();
        return view('admin.artikel.artikel')->with(['artikel' => $artikel]);
    }
    public function tambah_artikel(Request $request)
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
            $path = $request->file('gambar')->store('artikel', 'public');
            // Buat data baru di database
            DB::table('tb_artikel')->insert([
                [
                'judul' => $request->judul,
                'desc' => $request->desc,
                'gambar' => $path,
                'created_at' => now(),
                'updated_at' => now(),
                ],
            ]);
        }

        toast('Data Artikel Berhasil Ditambah','success');
        return redirect('/artikel-admin');
    }
    public function ubah_artikel(Request $request , $id)
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
         Artikel::where('id', $id)->update([
             'judul' => $request->judul,
             'desc' => $request->desc,
        ]);

        $dataArtikel =  Artikel::findOrFail($id);
        // Cek apakah ada file gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($dataArtikel->gambar) {
                Storage::disk('public')->delete($dataArtikel->gambar);
            }

            // Simpan file baru di direktori 'public/berita' dan dapatkan path
            $path = $request->file('gambar')->store('artikel', 'public');

            // Update kolom 'image' dengan path baru
            $dataArtikel->gambar = $path;

        }
        // Simpan perubahan ke database (baik ada atau tidak ada gambar baru)
        $dataArtikel->save();

        toast('Data Artikel Berhasil Diubah','success');
        return redirect('/artikel-admin');
    }

    public function hapus_artikel($id)
    {
        $dataArtikel =  Artikel::where('id', $id)->first();
            Storage::disk('public')->delete($dataArtikel->gambar);

            Artikel::where('id', $id)->delete();

        toast('Data Artikel Berhasil Dihapus','error');
        return redirect('/artikel-admin');
    }

}
