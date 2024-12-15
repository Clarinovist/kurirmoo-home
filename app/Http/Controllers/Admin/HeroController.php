<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class HeroController extends Controller
{
    public function index()
    {
        $hero =  Hero::first();
        return view('admin.hero.hero')->with(['hero' => $hero]);
    }

    public function ubah_hero(Request $request , $id)
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
         Hero::where('id', $id)->update([
            'judul' => $request->judul,
            'desc' => $request->desc,
        ]);

        $dataHero =  Hero::findOrFail($id);
        // Cek apakah ada file gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($dataHero->gambar) {
                Storage::disk('public')->delete($dataHero->gambar);
            }

            // Simpan file baru di direktori 'public/berita' dan dapatkan path
            $path = $request->file('gambar')->store('Hero', 'public');

            // Update kolom 'image' dengan path baru
            $dataHero->gambar = $path;

        }
        // Simpan perubahan ke database (baik ada atau tidak ada gambar baru)
        $dataHero->save();

        toast('Data Hero Berhasil Diubah','success');
        return redirect('/hero-admin');
    }
}
