@extends('layout.main')
@section('title', 'Belajar - Tambah Buku')
@section('content')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-6">Tambah Kategori Buku</h1>
        <hr class="my-4">
        <form action="/kategori" method="POST">
            @csrf
            <div class="form-group">
                <label for="deskripsi">Kategori</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Kategori"
                value="{{ old('deskripsi') }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection