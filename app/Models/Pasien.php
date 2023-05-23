<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory; 

    public static
     function getAll(){
        return [
            ['nama'=>'Ozama', 'jk'=>'l', 'tgl_lahir'=>'12/03/1998', 'alamat'=>'Bogor','telp'=>'087332190653'],
            ['nama'=>'Kiara', 'jk'=>'p', 'tgl_lahir'=>'10/12/2000', 'alamat'=>'Pekanbaru','telp'=>'087332190653'],
            ['nama'=>'Raden', 'jk'=>'l', 'tgl_lahir'=>'11/30/2001', 'alamat'=>'Jakarta','telp'=>'087332190653'],
        ];
    }
}
