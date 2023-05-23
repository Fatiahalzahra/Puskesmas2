<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory; 

    public static
     function getAll(){
        return [
            ['nama'=>'Ozama', 'spesialis'=>'Bedah', 'alamat'=>'Bogor','telp'=>'087332190653'],
            ['nama'=>'Kiara', 'spesialis'=>'THT', 'alamat'=>'Pekanbaru','telp'=>'087332190653'],
            ['nama'=>'Raden', 'spesialis'=>'Kandungan', 'alamat'=>'Jakarta','telp'=>'087332190653'],
        ];
    }
}
