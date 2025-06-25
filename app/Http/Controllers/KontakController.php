<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontaks = Kontak::latest()->paginate(5); // paginate biar lebih rapi
        return view('kontaks.index', compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kontaks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required',
            'alamat'   => 'required',
            'no_hp'    => 'required|numeric',
            'email'    => 'required|email',
            'kategori' => 'required',
        ]);

        Kontak::create($request->all());

        return redirect()->route('kontaks.index')
            ->with('success', 'Kontak berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        return view('kontaks.show', compact('kontak'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        return view('kontaks.edit', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {
        $request->validate([
            'nama'     => 'required',
            'alamat'   => 'required',
            'no_hp'    => 'required|numeric',
            'email'    => 'required|email',
            'kategori' => 'required',
        ]);

        $kontak->update($request->all());

        return redirect()->route('kontaks.index')
            ->with('success', 'Kontak berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();

        return redirect()->route('kontaks.index')
            ->with('success', 'Kontak berhasil dihapus.');
    }
}
