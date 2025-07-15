<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\view\View;

class DosenController extends Controller
{
    public function index(){
        $dosen = Dosen::latest()->paginate(10);
        return view('dosen.index', compact('dosen'));
    }
}
