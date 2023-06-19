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
    protected $fillable = ['nama','jk','tgl_lahir','alamat','telp', 'dokter_id'];

    //menghubungkan pasien ke model dokter 
    public function dokter()
 {
    //karena status model saat ini adalah yang di titipkan id 
    //Maka dapat menggunakan belongsTo atau belongsTomany
    return $this->belongsTo(Dokter::class);
 }
}
