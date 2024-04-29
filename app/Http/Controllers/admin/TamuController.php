<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BukuTamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TamuController extends Controller
{
    public function index(){
        $data = BukuTamu::all();

        return view('Admin.Tamu.index', compact('data'));
    }

    public function formTambah(){
        return view('Admin.Tamu.formTambah');
    }

    public function simpanData(Request $request){
        $name = $request->name;
        $no_telp = $request->no_telp;
        $email = $request->email;
        $alamat = $request->alamat;
        $kategori = $request->kategori;
        $keperluan = $request->keperluan;

        $data = new BukuTamu;
        $data->name = $name;
        $data->no_telp = $no_telp;
        $data->email = $email;
        $data->alamat = $alamat;
        $data->kategori = $kategori;
        $data->keperluan = $keperluan;
        $data->password = Hash::make('rahasia');

        $data->save();

        return redirect('admin/tamu')->with('status', 'Data Berhasil Disimpan');



    }

    public function formEdit($id){
        $data = BukuTamu::find($id);
        return view('Admin.Tamu.formEdit', compact('data'));
        
    }

    public function updateTamu(Request $request){
        $id = $request->id;
        $name = $request->name;
        $no_telp = $request->no_telp;
        $email = $request->email;
        $alamat = $request->alamat;
        $kategori = $request->kategori;
        $keperluan = $request->keperluan;

        $data = BukuTamu::find($id);
        $data->name = $name;
        $data->no_telp = $no_telp;
        $data->email = $email;
        $data->alamat = $alamat;
        $data->kategori = $kategori;
        $data->keperluan = $keperluan;
        $data->update();

        return redirect('admin/tamu')->with('status', 'Data Berhasil Diupdate');
    }

    public function hapusTamu(Request $request){
        $id = $request->id;
        $data = BukuTamu::find($id);
        $data->delete();
        return redirect('admin/tamu')->with('status', 'Data Berhasil Dihapus');

    }

    
}
