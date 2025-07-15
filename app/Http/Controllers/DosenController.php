<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\view\View;
use Illuminate\Http\RedirectResponse;
//import Facades Storage
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;



class DosenController extends Controller
{
    public function index(){
        $dosen = Dosen::latest()->paginate(10);
        return view('dosen.index', compact('dosen'));
    }

    public function create(){
        return view('dosen.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */

     public function store(Request $request){
        $request->validate([
            'name'         => 'required|min:5',
            'email'   => 'required|min:10',
            'password'         => 'required|min:10',
            'address'         => 'required|min:10',
            'created_at'         => now(),
            'updated_at'         => now(),
        ]);

        Dosen::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ]);
        return redirect()->route('dosen.index')->with('success', 'Dosen Berhasil Ditambahkan');
    }

    public function edit(string $id): View{
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

      /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */

    public function update(Request $request, string $id): RedirectResponse
{
    // validasi form
    $validated = $request->validate([
        'name'     => 'required|min:5',
        'email'    => 'required|email|min:10',
        'password' => 'nullable|min:10', // password boleh kosong
        'address'  => 'required|min:10',
    ]);

    // cari data
    $dosen = Dosen::findOrFail($id);

    // siapkan data yang akan diupdate
    $data = [
        'name'    => $validated['name'],
        'email'   => $validated['email'],
        'address' => $validated['address'],
    ];

    // jika password tidak kosong, hash & update
    if (!empty($validated['password'])) {
        $data['password'] = Hash::make( $validated['password']);
    }

    // update ke database
    $dosen->update($data);

    return redirect()->route('dosen.index')->with('success', 'Dosen Berhasil Diupdate');
}

public function destroy($id): RedirectResponse
    {
        //get Dosen by ID
        $dosen = Dosen::findOrFail($id);

        //delete product
        $dosen->delete();

        //redirect to index
        return redirect()->route('dosen.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
