<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BukuTamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TamuController extends Controller
{
    public function simpanTamu(Request $request){
        $name = $request->name;
        $no_telp = $request->no_telp;
        $email = $request->email;
        $alamat = $request->alamat;
        $kategori = $request->kategori;
        $keperluan = $request->keperluan;


        
        $data = new BukuTamu();
        $data->name = $name;
        $data->no_telp = $no_telp;
        $data->email = $email;
        $data->alamat = $alamat;
        $data->kategori = $kategori;
        $data->keperluan = $keperluan;
        $data->password = hash::make('rahasia');
        $data->save();

        return redirect('/')->with('status', 'Data Berhasil Disimpan');


    }
}
