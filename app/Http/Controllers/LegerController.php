<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;

class LegerController extends Controller
{
    public function index()
    {
        return view('etc.leger');
    }
    public function detail()
    {
        // return view('etc.detailLeger');
        $siswa = Nilai::all();
        $nilai = json_decode(Nilai::get('nilai'));

        // dd($nilai);
        // foreach ($nilai as $nn) {
        //     $n = (array) $nn->nilai;
        // }
        // dd($n);
        $cth = Nilai::get('nilai')->first();
        if (!$cth) {
            # code...
            $attr = [];
        } else {

            $attr = json_decode($cth['nilai']);
        }

        return view('etc.detailLeger', ["siswa" => $siswa, "nilai" => $nilai, "keyss" => $attr]);
    }
    public function store()
    {
        $file = Excel::import(new NilaiImport, request()->file('excel'));
        return redirect()->route('detail_leger')->with('status', '200');
    }
    public function export()
    {
        return view('etc.exportLeger');
    }
}
