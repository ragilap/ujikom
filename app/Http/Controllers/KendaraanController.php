<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = kendaraan::all();
        return view('kendaraan.crud', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'seri' => 'required',
            'merek' => 'required',
            'warna' => 'required',
            'kapasitas' => 'required',
            'harga' => 'required'
        ]);

        $kendaraan = new kendaraan();
        $kendaraan->no_kendaraan = $request->seri;
        $kendaraan->merek = $request->merek;
        $kendaraan->warna = $request->warna;
        $kendaraan->kapasitas = $request->kapasitas;
        $kendaraan->harga_sewa = $request->harga;
        $kendaraan->save();

        return redirect('/kendaraan/crud')->with('Success', 'Tambah data berhasil');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::find($id);
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request , $id)
    {
        dd($request);
        $request->validate([
            'seri' => 'required',
            'merek' => 'required',
            'warna' => 'required',
            'kapasitas' => 'required',
            'harga' => 'required'
        ]);
        $kendaraan = kendaraan::find($id);
        $kendaraan->no_kendaraan = $request->seri;
        $kendaraan->merek = $request->merek;
        $kendaraan->warna = $request->warna;
        $kendaraan->kapasitas = $request->kapasitas;
        $kendaraan->harga_sewa = $request->harga;
        $kendaraan->save();

        return redirect('/kendaraan/crud')->with('berhasil', 'Data telah di Update!');
    }

    public function destroy($id)
    {
        $kendaraan = kendaraan::find($id);
        $kendaraan->delete();
        return redirect('/kendaraan/crud')->with('Berhasil', 'Data telah terhapus.');
    }
}
