<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa as MahasiswaModel;

class Mahasiswa extends Controller
{
    public function homepage()
    {
        return view('steller.main-content');
    }

    public function index()
    {
        // $mahasiswa = [
        //     [
        //         "nama" => "Diwa Perkasa",
        //         "nim" => "C54100071",
        //         "angkatan" => 47,
        //         "domisili" => "Banten"
        //     ],
        //     [
        //         "nama" => "Putri",
        //         "nim" => "C541000100",
        //         "angkatan" => 57,
        //         "domisili" => "Jakarta"
        //     ]
        // ];

        $mahasiswa = MahasiswaModel::all();

        $data = [
            'mahasiswa' => $mahasiswa
        ];

        return view('mahasiswa', $data);
    }

    public function create()
    {
        return view('mahasiswa-create');
    }

    public function post(Request $request)
    {
        $mahasiswaBaru = [
            "nama" => $request->nama,
            "nim" => $request->nim,
            "angkatan" => $request->angkatan,
            "domisili" => $request->domisili,
        ];

        MahasiswaModel::create($mahasiswaBaru);

        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::find($id);

        if ($mahasiswa === NULL) {
            return redirect('/mahasiswa');
        }

        $data = [
            'mahasiswa' => $mahasiswa
        ];

        return view('mahasiswa-edit', $data);
    }

    public function postEdit($id, Request $request)
    {
        // load model data
        $mahasiswa = MahasiswaModel::find($id);
        // assign model properties
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->domisili = $request->domisili;
        // save model data
        $mahasiswa->save();

        return redirect('/mahasiswa');
    }

    public function delete($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        // handle empty data
        if ($mahasiswa === NULL) {
            return redirect('/mahasiswa');
        }

        $mahasiswa->delete();

        return redirect('/mahasiswa');
    }

    public function message(Request $request)
    {
        
    }
}