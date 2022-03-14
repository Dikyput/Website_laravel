<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
class MahasiswaController extends Controller
{
    public function create()
    {
        return view('mahasiswa.create');
    }

    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index',compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
 
        return redirect('mahasiswa')->with('msg','Data Berhasil di Simpan');;
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
