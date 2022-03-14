@extends('layout.main')
@section('title', 'Belajar - Mahasiswa')
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
        <h1 class="display-6">Data Mahasiswa</h1>
        <hr class="my-4">
        <a href="mahasiswa/create" class="btn btn-primary mb-1">Tambah Mahasiswa</a>
        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. HP</th>
                    <th></th>
                </tr>
           </thead>
           <tbody>
               @foreach ($mahasiswa as $maha)
               <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $maha->name }}</td>
                    <td>{{ $maha->alamat }}</td>
                    <td>{{ $maha->jk }}</td>
                    <td>{{ $maha->email }}</td>
                    <td>{{ $maha->no_telp }}</td>
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
