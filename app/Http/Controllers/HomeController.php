<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\DetailSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswa = DetailSiswa::count();
        $kelas = Kelas::count();
        $mapel = Mapel::count();
        return view('home', [
            'tsiswa' => $siswa,
            'tkelas' => $kelas,
            'tmapel' => $mapel
        ]);
    }

    public function logout() 
    {
        return view('/login');
    }
}
