<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index()
    {
        $rombel = Rombel::all();
        $guru = Guru::all();
        $jurusan = Jurusan::all();
        $kelas = DB::select(DB::raw('SELECT m_kelas.id, m_jurusan.nama_jurusan, m_guru.nama, m_rombel.kelas, m_rombel.jurusan, m_rombel.nomor FROM m_kelas INNER JOIN m_jurusan ON m_kelas.m_jurusan_id = m_jurusan.id INNER JOIN  m_guru ON m_kelas.m_guru_id = m_guru.id INNER JOIN  m_rombel ON m_kelas.m_rombel_id = m_rombel.id'));
        return view('master.kelas', ["rombel" => $rombel, "jurusan" => $jurusan, "guru" => $guru, "kelas" => $kelas]);
    }
    public function indexDetail()
    {
        return view('master.detailKelas');
    }

    public function addKelas(Request $request)
    {
        Kelas::create([
            "m_jurusan_id" => $request['jurusan'],
            "m_rombel_id" => $request['rombel'],
            "m_guru_id" => $request['guru']
        ]);
        return redirect('kelas');
    }

    public function deleteKelas($id)
    {
        Kelas::where('id', $id)->delete();
        return redirect('kelas');
    }

    public function addRombel(Request $request)
    {
        Rombel::create([
            "kelas" => $request['kelas'],
            "jurusan" => $request['jurusan'],
            "nomor" => $request['nomor'],
        ]);
        return redirect('kelas');
    }
    public function deleteRombel($id)
    {
        Rombel::where('id', $id)->delete();
        return redirect('kelas');
    }
    public function getRombelById($id)
    {
        $rombelDetail = Rombel::where('id', $id)->get();
        return $rombelDetail;
    }
    public function addJurusan(Request $request)
    {
        Jurusan::create([
            "nama_jurusan" => $request['nama_jurusan']
        ]);
        return redirect('kelas');
    }
    public function deleteJurusan($id)
    {
        Jurusan::where('id', $id)->delete();
        return redirect('kelas');
    }
}
