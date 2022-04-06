<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();

        return view('mahasiswa/index', ['mahasiswa'=> $mahasiswa]);
    }

    public function add()
    {
        return view('mahasiswa/add');
    }

    public function addData(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('mahasiswa');
    }

    public function update($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where('nim',$id)->get();

        return view('mahasiswa/update', ['mahasiswa' => $mahasiswa]);
    }

    public function updateData(Request $req)
    {
        DB::table('mahasiswa')->where('nim', $req->nim)->update([
            'nama' => $req->nama,
            'alamat' => $req->alamat
        ]);

        return redirect('/mahasiswa');
    }
}
