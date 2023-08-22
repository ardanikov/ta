<?php

namespace App\Http\Controllers;

use App\Models\DetailSiswa;
use Illuminate\Http\Request;
use App\Imports\DetailSiswaImport;
use Excel;

class MasterSiswaController extends Controller
{
    //
    public function index()
    {
        $siswaData = DetailSiswa::all();
        return view('master.siswa', ["siswa" => $siswaData]);
    }
    public function detailSiswa($id)
    {
        $siswaDetail = DetailSiswa::where('id', $id)->get();
        // dd($siswaDetail);
        return view('master.detailSiswa', ["detail" => $siswaDetail]);
    }
    public function deleteSiswa($id)
    {
        DetailSiswa::where('id', $id)->delete();
        return redirect()->route('master_siswa')->with('message', 'Data Berhasil Dihapus');
    }
    public function updateSiswa($id, Request $request)
    {
        $siswa = DetailSiswa::find($id);
        $final_nama_before = $siswa->foto;
        $final_nama_after = $siswa->foto_after;
        if ($request->hasFile('foto')) {

            $path = 'public/img/siswa/before';
            $nama_foto_before = $request->file('foto')->getClientOriginalName();
            $final_nama_before = pathinfo($nama_foto_before, PATHINFO_FILENAME) . "-" . rand() . "." . pathinfo($nama_foto_before, PATHINFO_EXTENSION);
            // dd($request->file('foto-after'));
            $store =  $request->file('foto')->storeAs($path, $final_nama_before);
            // dd($store);
        }
        if ($request->hasFile('foto-after')) {
            $path_after = 'public/img/siswa/after';
            $nama_foto_after = $request->file('foto-after')->getClientOriginalName();
            $final_nama_after = pathinfo($nama_foto_after, PATHINFO_FILENAME) . "-" . rand() . "." . pathinfo($nama_foto_after, PATHINFO_EXTENSION);
            // dd($request->file('foto-after'));
            $request->file('foto-after')->storeAs($path_after, $final_nama_after);
        }




        // dd($final_nama_before);
        $siswa->foto = $final_nama_before;
        $siswa->foto_after = $final_nama_after;
        $siswa->nama_lengkap = $request['nama_lengkap'];
        $siswa->nisn = $request['nisn'];
        $siswa->nis = $request['nis'];
        $siswa->nik = $request['nik'];
        $siswa->rombel = $request['rombel'];
        $siswa->gender = $request['gender'];
        $siswa->nama_panggilan = $request['nama_panggilan'];
        $siswa->ttl = $request['ttl'];
        $siswa->agama = $request['agama'];
        $siswa->kewarganegaraan = $request['kewarganegaraan'];
        $siswa->anak_ke = $request['anak_ke'];
        $siswa->jml_saudara_kandung = $request['jml_saudara_kandung'];
        $siswa->jml_saudara_angkat = $request['jml_saudara_angkat'];
        $siswa->jml_saudara_tiri = $request['jml_saudara_tiri'];
        $siswa->is_yatim = $request['is_yatim'];
        $siswa->bahasa = $request['bahasa'];
        $siswa->alamat = $request['alamat'];
        $siswa->telp = $request['telp'];
        $siswa->tinggal = $request['tinggal'];
        $siswa->jarak_tinggal = $request['jarak_tinggal'];
        $siswa->goldar = $request['goldar'];
        $siswa->penyakit_bawaan = $request['penyakit_bawaan'];
        $siswa->kelainan_jasmani = $request['kelainan_jasmani'];
        $siswa->tb = $request['tb'];
        $siswa->tamatan_dari = $request['tamatan_dari'];
        $siswa->tgl_no_ijazah = $request['tgl_no_ijazah'];
        $siswa->tgl_no_stl = $request['tgl_no_stl'];
        $siswa->lama_belajar = $request['lama_belajar'];
        $siswa->dari_sekolah = $request['dari_sekolah'];
        $siswa->alasan_pindah = $request['alasan_pindah'];
        $siswa->diterima_dikelas = $request['diterima_dikelas'];
        $siswa->diterima_jurusan = $request['diterima_jurusan'];
        $siswa->diterima_date = $request['diterima_date'];
        $siswa->nama_ayah = $request['nama_ayah'];
        $siswa->ttl_ayah = $request['ttl_ayah'];
        $siswa->agama_ayah = $request['agama_ayah'];
        $siswa->kewarganegaraan_ayah = $request['kewarganegaraan_ayah'];
        $siswa->pendidikan_ayah = $request['pendidikan_ayah'];
        $siswa->pekerjaan_ayah = $request['pekerjaan_ayah'];
        $siswa->penghasilan_ayah = $request['penghasilan_ayah'];
        $siswa->alamat_no_ayah = $request['alamat_no_ayah'];
        $siswa->is_ayah_alive = $request['is_ayah_alive'];
        $siswa->nama_ibu = $request['nama_ibu'];
        $siswa->ttl_ibu = $request['ttl_ibu'];
        $siswa->agama_ibu = $request['agama_ibu'];
        $siswa->kewarganegaraan_ibu = $request['kewarganegaraan_ibu'];
        $siswa->pendidikan_ibu = $request['pendidikan_ibu'];
        $siswa->pekerjaan_ibu = $request['pekerjaan_ibu'];
        $siswa->penghasilan_ibu = $request['penghasilan_ibu'];
        $siswa->alamat_no_ibu = $request['alamat_no_ibu'];
        $siswa->is_ibu_alive = $request['is_ibu_alive'];
        $siswa->nama_wali = $request['nama_wali'];
        $siswa->ttl_wali = $request['ttl_wali'];
        $siswa->agama_wali = $request['agama_wali'];
        $siswa->kewarganegaraan_wali = $request['kewarganegaraan_wali'];
        $siswa->pendidikan_wali = $request['pendidikan_wali'];
        $siswa->pekerjaan_wali = $request['pekerjaan_wali'];
        $siswa->penghasilan_wali = $request['penghasilan_wali'];
        $siswa->alamat_no_wali = $request['alamat_no_wali'];
        $siswa->kesenian = $request['kesenian'];
        $siswa->olahraga = $request['olahraga'];
        $siswa->organisasi = $request['organisasi'];
        $siswa->lain_lain = $request['lain_lain'];
        $siswa->beasiswa_tahun = $request['beasiswa_tahun'];
        $siswa->beasiswa_kelas = $request['beasiswa_kelas'];
        $siswa->beasiswa_dari = $request['beasiswa_dari'];
        $siswa->meninggalkan_tahun = $request['meninggalkan_tahun'];
        $siswa->meninggalkan_alasan = $request['meninggalkan_alasan'];
        $siswa->akhir_tahun = $request['akhir_tahun'];
        $siswa->akhir_no_ijazah = $request['akhir_no_ijazah'];
        $siswa->akhir_no_stl = $request['akhir_no_stl'];
        $siswa->akhir_nilai_avg = $request['akhir_nilai_avg'];
        $siswa->melanjutkan = $request['melanjutkan'];
        $siswa->bekerja = $request['bekerja'];
        $siswa->save();
        return redirect()->back();
    }
    public function addSiswa(Request $request)
    {
        // dd($request);


        $siswaData = DetailSiswa::all();
        $saved = DetailSiswa::create([
            'nama_lengkap' => $request['nama_lengkap'],
            'nisn' => $request['nisn'],
            'nis' => $request['nis'],
            'nik' => $request['nik'],
            'rombel' => $request['rombel'],
            'gender' => $request['gender'],
            'nama_panggilan' => $request['nama_panggilan'],
            'ttl' => $request['ttl'],
            'agama' => $request['agama'],
            'kewarganegaraan' => $request['kewarganegaraan'],
            'anak_ke' => $request['anak_ke'],
            'jml_saudara_kandung' => $request['jml_saudara_kandung'],
            'jml_saudara_angkat' => $request['jml_saudara_angkat'],
            'jml_saudara_tiri' => $request['jml_saudara_tiri'],
            'is_yatim' => $request['is_yatim'],
            'bahasa' => $request['bahasa'],
            'alamat' => $request['alamat'],
            'telp' => $request['telp'],
            'tinggal' => $request['tinggal'],
            'jarak_tinggal' => $request['jarak_tinggal'],
            'goldar' => $request['goldar'],
            'penyakit_bawaan' => $request['penyakit_bawaan'],
            'kelainan_jasmani' => $request['kelainan_jasmani'],
            'tb' => $request['tb'],
            'tamatan_dari' => $request['tamatan_dari'],
            'tgl_no_ijazah' => $request['tgl_no_ijazah'],
            'tgl_no_stl' => $request['tgl_no_stl'],
            'lama_belajar' => $request['lama_belajar'],
            'dari_sekolah' => $request['dari_sekolah'],
            'alasan_pindah' => $request['alasan_pindah'],
            'diterima_dikelas' => $request['diterima_dikelas'],
            'diterima_jurusan' => $request['diterima_jurusan'],
            'diterima_date' => $request['diterima_date'],
            'nama_ayah' => $request['nama_ayah'],
            'ttl_ayah' => $request['ttl_ayah'],
            'agama_ayah' => $request['agama_ayah'],
            'kewarganegaraan_ayah' => $request['kewarganegaraan_ayah'],
            'pendidikan_ayah' => $request['pendidikan_ayah'],
            'pekerjaan_ayah' => $request['pekerjaan_ayah'],
            'penghasilan_ayah' => $request['penghasilan_ayah'],
            'alamat_no_ayah' => $request['alamat_no_ayah'],
            'is_ayah_alive' => $request['is_ayah_alive'],
            'nama_ibu' => $request['nama_ibu'],
            'ttl_ibu' => $request['ttl_ibu'],
            'agama_ibu' => $request['agama_ibu'],
            'kewarganegaraan_ibu' => $request['kewarganegaraan_ibu'],
            'pendidikan_ibu' => $request['pendidikan_ibu'],
            'pekerjaan_ibu' => $request['pekerjaan_ibu'],
            'penghasilan_ibu' => $request['penghasilan_ibu'],
            'alamat_no_ibu' => $request['alamat_no_ibu'],
            'is_ibu_alive' => $request['is_ibu_alive'],
            'nama_wali' => $request['nama_wali'],
            'ttl_wali' => $request['ttl_wali'],
            'agama_wali' => $request['agama_wali'],
            'kewarganegaraan_wali' => $request['kewarganegaraan_wali'],
            'pendidikan_wali' => $request['pendidikan_wali'],
            'pekerjaan_wali' => $request['pekerjaan_wali'],
            'penghasilan_wali' => $request['penghasilan_wali'],
            'alamat_no_wali' => $request['alamat_no_wali'],
            'kesenian' => $request['kesenian'],
            'olahraga' => $request['olahraga'],
            'organisasi' => $request['organisasi'],
            'lain_lain' => $request['lain_lain'],
            'beasiswa_tahun' => $request['beasiswa_tahun'],
            'beasiswa_kelas' => $request['beasiswa_kelas'],
            'beasiswa_dari' => $request['beasiswa_dari'],
            'meninggalkan_tahun' => $request['meninggalkan_tahun'],
            'meninggalkan_alasan' => $request['meninggalkan_alasan'],
            'akhir_tahun' => $request['akhir_tahun'],
            'akhir_no_ijazah' => $request['akhir_no_ijazah'],
            'akhir_no_stl' => $request['akhir_no_stl'],
            'akhir_nilai_avg' => $request['akhir_nilai_avg'],
            'melanjutkan' => $request['melanjutkan'],
            'bekerja' => $request['bekerja']

        ]);

        if ($saved) {
            return view('master.siswa', ["siswa" => $siswaData])->with('message', 'Sukses menambahkan data');
        } else {
            return view('master.siswa', ["siswa" => $siswaData])->with('error', 'Internal Server Error');
        }
    }
    public function create(Request $request)

    {
        $file = Excel::import(new DetailSiswaImport, request()->file('excel'));
        // dd(request()->file('excel'));

        return redirect()->back();
    }
}
