<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory; 

    //menghubungkan model ke tabel pasiens
    protected $table = 'pasiens';

    //menyebutkan field yang boeh diisi.
    protected $fillable = ['nama','jk','tgl_lahir','alamat','telp'];
}
