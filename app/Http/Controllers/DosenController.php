<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\view\View;
use Illuminate\Http\RedirectResponse;

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
}
