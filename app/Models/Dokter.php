<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory; 

    protected $guarded = ['id'];

     //menghubungkan ke model pasien 
     // 1 dokter dapat menangani banyak pasien
     public function pasien()
     {
        //karena dokter menitipkan id ke pasien 
        //maka dokter menitipkan has + kardinalitas 
        //kardinalitas 1 to M dari Model ini ke Model lain: hasmany
        //1 to 1 model lain: hasOne
        return $this-> hasMany(Pasien::class); 
     } 
}
