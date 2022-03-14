@extends('layout.main')
@section('title', 'Belajar - Tambah Petugas')
@section('content')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-6">Tambah Data Petugas</h1>
        <hr class="my-4">
        <form action="/petugas" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Petugas</label>
                <input type="text" class="form-control" id="nama" name="name_petu" placeholder="Lio"
                value="{{ old('name_petu') }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat"name="alamat_petu" placeholder="Alamat"
                value="{{ old('alamat_petu') }}">
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-control" id="jk" name="jk_petu">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" class="form-control" id="email"
                name="email_petu" aria-describedby="emailHelp" 
                placeholder="Enter email" value="{{ old('email_petu') }}">
            </div>
            <div class="form-group">
                <label for="no_telp">No. HP</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp_petu" placeholder="NO. HP"
                value="{{ old('no_telp_petu') }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection