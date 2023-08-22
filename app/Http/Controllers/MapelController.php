<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $kurikulum = Kurikulum::all();
        $mapel = Mapel::all();
        // dd($mapel);
        return view('master.mapel', ["kurikulum" => $kurikulum, "mapel" => $mapel]);
    }

    public function addMapel(Request $request)
    {
        $saved = Mapel::create([
            'nama_pelajaran' => $request['nama_pelajaran'],
            'ringkas' => $request['ringkas'],
            'm_kurikulum' => $request['m_kurikulum'],
        ]);
        if ($saved) {
            return redirect()->route('mapel')->with('message', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('mapel')->with('error', 'Internal Server Error');
        }
    }
    public function getById($id)
    {
        $mapelData = Mapel::where('id', $id);
        return $mapelData;
    }

    public function deleteMapel($id)
    {
        Mapel::where('id', $id)->delete();
        return redirect()->route('mapel')->with('message', 'Data Berhasil Dihapus');
    }

    public function addKurikulum(Request $request)
    {
        $saved = Kurikulum::create([
            'nama_kurikulum' => $request['nama_kurikulum'],
        ]);
        if ($saved) {
            return redirect()->route('mapel')->with('message', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('mapel')->with('error', 'Internal Server Error');
        }
    }

    public function deleteKurikulum($id)
    {
        Kurikulum::where('id', $id)->delete();
        return redirect()->route('mapel')->with('message', 'Data Berhasil Dihapus');
    }
}
