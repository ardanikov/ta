<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\NilaiImport;
use App\Models\Nilai;
use App\Models\DetailSiswa;
use Excel;

class NilaiController extends Controller
{
    public function index()
    {
        $siswa = DetailSiswa::all();
        return view('etc.nilai', ["siswa" => $siswa]);
    }
    public function detail($id)
    {
        $siswa = DetailSiswa::where('id', $id)->get();
        // dd($siswa);
        return view('etc.detailNilai', ["siswa" => $siswa]);
    }
    public function store()
    {
        $file = Excel::import(new NilaiImport, request()->file('excel'));
        return redirect()->route('detail_nilai')->with('status', '200');
    }
}
