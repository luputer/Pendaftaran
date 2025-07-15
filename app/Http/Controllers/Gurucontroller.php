<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class Gurucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = guru::all();
        return view('guru.index', compact('guru'));
        //
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('guru.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        $request->validate([
        'nama' => 'required|string|max:200',
        'email' => 'required|string|email|max:200',
        'alamat' => 'required|string|max:200'
    ]);

    guru::create($request->all());
    return redirect()->route('guru.index')->with('suskes','berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $guru = guru::findOrFail($id);
    return view('guru.edit', compact('guru'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:200',
        'email' => 'required|string|email|max:200',
        'alamat' => 'required|string|max:200'
    ]);

    $guru = guru::findOrFail($id);
    $guru->update([
        'nama' => $request->nama,
        'email' => $request->email,
        'alamat' => $request->alamat,
    ]);

    return redirect()->route('guru.index')->with('success', 'Data guru berhasil diperbarui.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $guru= Guru::findOrfail($id);
     $guru->delete();
    return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus.');
}
        //
    }

