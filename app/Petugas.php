<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'table_petugas';
    protected $fillable = ['name_petu','jk_petu','alamat_petu','email_petu','no_telp_petu'];
}
