<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;
class PetugasController extends Controller
{
    public function create()
    {
        return view('petugas.create');
    }

    public function index()
    {
        $petugas = Petugas::all();
        return view('petugas.index',compact('petugas'));
    }

    public function store(Request $request)
    {
        Petugas::create($request->all());
        return redirect('petugas')->with('msg','Data Berhasil di Simpan');;
    }
    public function show($id)
    {

    }
    public function edit($id)
    {

    } 
    public function update(Request $request, $id)
    {

    }
}
