<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(){
        $dokters = Dokter::all();
        return view('admin.dokter.index', [
            'dokters' => $dokters
        ]
        );
    }

    public function create(){
        return view('admin.dokter.create');
    }

    public function store(Request $request){
        //insert data ke tabel dokters
        Dokter::create ([
         // field di table => nilai yang ingin diisi
         'nama' =>$request->nama,
         'spesialis' =>$request->spesialis,
         'telp' =>$request->telp,
         'alamat' =>$request->alamat,
        ]);
 
        return redirect('/dokter');
         
     }
     
    
}
