@extends('layout.main')
@section('title', 'Belajar - Kategori')
@section('content')

<div class="container">
    <div class="jumbotron">
        @if(session('msg'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{session('msg')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <h1 class="display-6">Data Buku</h1>
        <hr class="my-4">
        <a href="buku/create" class="btn btn-primary mb-1">Tambah Buku</a>
        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Deskripsi Buku</th>
                    <th scope="col">Katerogi Buku</th>
                    <th scope="col">Cover Buku</th>
                    <th></th>
                </tr>
           </thead>
           <tbody>
               @foreach ($buku as $buku)
               <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $buku->judul_buku }}</td>
                    <td>{{ $buku->deskripsi }}</td>
                    <td>{{ $buku->kategori }}</td>
                    <td><img src='image/{{ $buku->cover_img }}' style='width:80px; height:50px;'></td>
                    <td>
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Hapus</a>
                    </td>
               </tr>
               @endforeach  
        </table>
    </div>
</div>
@endsection
