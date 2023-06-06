<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        $pasiens = Pasien::all();
        return view('admin.pasien.index', [
            'pasiens' => $pasiens
        ]
        );
    }

    public function create(){
        return view('admin.pasien.create');
    }

    public function store(Request $request){
        //Melakukan validasi data form
        $request->validate([
            'nama' => 'required | min:3' ,
            'jk' => 'required',
            'tgl_lahir' => 'required | date',
            'alamat' => 'required | max:500',
            'telp' => 'required | numeric | digits_between:10,14',
        ]);
        
       //insert data ke tabel pasiens
       Pasien::create([
        // field di table => nilai yang ingin diisi
        'nama' =>$request->nama,
        'jk' =>$request->jk,
        'tgl_lahir' =>$request->tgl_lahir,
        'alamat' =>$request->alamat,
        'telp' =>$request->telp
       ]);

       return redirect('/pasien');
        
    }

    public function edit ($id){
        $pasien = Pasien::find($id);

        return view('admin.pasien.edit',[
            'pasien' => $pasien
        ]);
    }
//method untuk update pasien 
public function update($id, Request $request){
    //Melakukan validasi data form
    $validatedData = $request->validate([
        'nama' => 'required | min:3' ,
        'jk' => 'required',
        'tgl_lahir' => 'required | date',
        'alamat' => 'required | max:500',
        'telp' => 'required | numeric | digits_between:10,14',
    ]);

    // cari pasien yang akan di update
    $pasien = Pasien::find($id);

    //update pasien
    $pasien->update($validatedData);

    //Kembalikan ke halaman pasien
    return redirect('/pasien')->with('succes', 'Data pasien berhasil diubah.');

}

//method untuk hapus pasien
public function destroy(Request $request){
    Pasien::destroy($request->id);

    //Kembalikan ke daftar pasien
    return redirect('pasien') ->with('secces', 'Data pasien berhasil di hapus');
}
    
}
