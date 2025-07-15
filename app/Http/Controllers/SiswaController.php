<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $siswas = Siswa::orderBy('nilai', 'desc')->get();
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'kelas' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image validation
            'nilai' => 'required|numeric|min:0|max:100',
        ]);
        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa) {}

    /**
     * Show the form for editing the specified resource.
     */



    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'kelas' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image validation
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}
