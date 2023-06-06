<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory; 

    //menghubungkan model ke tabel dokters
    protected $table = 'dokters';

    //menyebutkan field yang boleh diisi.
    protected $fillable = ['nama','spesialis','telp','alamat'];
}
