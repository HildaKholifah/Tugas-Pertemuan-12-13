<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mahasiswa.index'); // memanggil views
    }

    public function getData()
    {
        $mahasiswas = Mahasiswa::latest()->get();
        return response()->json(['data' => $mahasiswas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'       => 'required',
            'nim'        => 'required|unique:mahasiswas',
            'prodi'      => 'required',
            'email'      => 'required|email',
            'no_hp'      => 'required',
            'dosen_wali' => 'required',
            'kelas'      => 'required',
        ]);

        Mahasiswa::create($request->all());

        return response()->json(['message' => 'Data berhasil disimpan']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return response()->json($mahasiswa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'       => 'required',
            'nim'        => 'required|unique:mahasiswas,nim,',
            'prodi'      => 'required',
            'email'      => 'required|email',
            'no_hp'      => 'required',
            'dosen_wali' => 'required',
            'kelas'      => 'required',
        ]);

        Mahasiswa::find($id)->update($request->all());

        return response()->json(['message' => 'Data berhasil diperbarui']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
