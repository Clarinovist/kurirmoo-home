<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Armada;
use App\Models\DetailArmada;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ArmadaController extends Controller
{
    public function index()
    {
        // $armada =  Armada::all();
        $armada = DB::table('tb_armada')
        ->join('tb_detail_armada', 'tb_armada.id_detail_armada', '=','tb_detail_armada.id')
        ->select('tb_armada.*','tb_detail_armada.*')
        ->get();
        return view('admin.armada.armada')->with(['armada' => $armada]);
    }

    public function tambah_armada(Request $request)
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

       // Insert data ke tabel DetailArmada dan dapatkan ID yang baru saja dimasukkan
    $idDetailArmada = DetailArmada::insertGetId([
        'ukuran_karoseri' => $request->ukuran_karoseri,
        'berat' => $request->berat,
        'ukuran_mobil' => $request->ukuran_mobil,
        'mesin' => $request->mesin,
        'roda' => $request->roda,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Gunakan ID tersebut untuk mengisi kolom id_detail_armada di tabel Armada
    $dataArmada = new Armada();
    $dataArmada->nama = $request->nama;
    $dataArmada->id_detail_armada = $idDetailArmada;

    // Cek apakah ada file gambar baru
    if ($request->hasFile('gambar')) {
        // Simpan file baru di direktori 'public/armada' dan dapatkan path
        $path = $request->file('gambar')->store('armada', 'public');

        // Update kolom 'gambar' dengan path baru
        $dataArmada->gambar = $path;
    }

    // Simpan data ke tabel Armada
    $dataArmada->created_at = now();
    $dataArmada->updated_at = now();
    $dataArmada->save();


    toast('Data Armada Berhasil Ditambah','success');
    return redirect('/armada-admin');
    }

    public function ubah_armada(Request $request , $id)
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

        // Cari data Armada berdasarkan ID
    $dataArmada = Armada::findOrFail($id);

    // Cari data DetailArmada berdasarkan id_detail_armada dari Armada
    $detailArmada = DetailArmada::findOrFail($dataArmada->id_detail_armada);

    // Perbarui data DetailArmada
    $detailArmada->update([
        'ukuran_karoseri' => $request->ukuran_karoseri,
        'berat' => $request->berat,
        'ukuran_mobil' => $request->ukuran_mobil,
        'mesin' => $request->mesin,
        'roda' => $request->roda,
        'updated_at' => now(),
    ]);

    // Perbarui data Armada
    $dataArmada->nama = $request->nama;

    // Cek apakah ada file gambar baru
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($dataArmada->gambar) {
            Storage::disk('public')->delete($dataArmada->gambar);
        }

        // Simpan file gambar baru dan dapatkan path
        $path = $request->file('gambar')->store('armada', 'public');

        // Update kolom 'gambar' dengan path baru
        $dataArmada->gambar = $path;
    }

    // Simpan perubahan ke tabel Armada
    $dataArmada->updated_at = now();
    $dataArmada->save();

        toast('Data Armada Berhasil Diubah','success');
        return redirect('/armada-admin');
    }

    public function hapus_armada($id)
    {
        $data = Armada::where('id', $id)->get();
        foreach ($data as $view) {
            $fotoLama = $view->gambar;
            if (!$fotoLama == null) {
                $fileName = public_path('storage/armada/' . $fotoLama);
                if (file_exists($fileName)) unlink($fileName);
            }
        }
        Armada::where('id', $id)->delete();

        toast('Data Armada Kurirmoo Berhasil Dihapus','error');
        return redirect('/armada-admin');
    }
}
