<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'table_mahasiswas';
    protected $fillable = ['name','jk','alamat','email','no_telp'];
}
