<?php

namespace App\Imports;

use App\Models\DetailSiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToModel, WithHeadingRow
{
    public function headingRow(): int
    {
        return 2;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);
        return new DetailSiswa([
            'nama_lengkap' => $row['nama_lengkap'],
            'nisn' => $row['nisn'],
            'nis' => $row['nis'],
            'nik' => $row['nik'],
            'rombel' => $row['program_studi'],
            'gender' => $row['jenis_kelamin'],
            'nama_panggilan' => $row['nama_panggilan'],
            'ttl' => $row['ttl'],
            'agama' => $row['agama'],
            'kewarganegaraan' => $row['kewarganegaraan'],
            'anak_ke' => $row['anak_ke'],
            'jml_saudara_kandung' => $row['jml_saudara_kandung'],
            'jml_saudara_angkat' => $row['jml_saudara_angkat'],
            'jml_saudara_tiri' => $row['jml_saudara_tiri'],
            'is_yatim' => $row['yatimpiatuyatim_piatu'],
            'bahasa' => $row['bahasa_sehari_hari'],
            'alamat' => $row['alamat'],
            'telp' => $row['telphp'],
            'tinggal' => $row['tinggal_dengan'],
            'jarak_tinggal' => $row['jarak_tempat_tinggal'],
            'goldar' => $row['goldar'],
            'penyakit_bawaan' => $row['riwayat_penyakit'],
            'kelainan_jasmani' => $row['kelainan_jasmani'],
            'tb' => $row['tinggi'],
            'tamatan_dari' => $row['tamatan_dari'],
            'tgl_no_ijazah' => $row['tanggal_no_ijazah'],
            'tgl_no_stl' => $row['tanggal_no_stl'],
            'lama_belajar' => $row['lama_belajar'],
            'dari_sekolah' => $row['dari_sekolah'],
            'alasan_pindah' => $row['alasan'],
            'diterima_dikelas' => $row['diterima_dikelas'],
            'diterima_jurusan' => $row['program_studi'],
            'diterima_date' => $row['tanggal'],
            'nama_ayah' => $row['nama_ayah'],
            'ttl_ayah' => $row['ttl_ayah'],
            'agama_ayah' => $row['agama_ayah'],
            'kewarganegaraan_ayah' => $row['kewarganegaraan_ayah'],
            'pendidikan_ayah' => $row['pendidikan_ayah'],
            'pekerjaan_ayah' => $row['pekerjaan_ayah'],
            'penghasilan_ayah' => $row['penghasilan_perbulan'],
            'alamat_no_ayah' => $row['alamat_ayah'],
            'is_ayah_alive' => $row['ayah_masih_hidup'],
            'nama_ibu' => $row['nama_ibu'],
            'ttl_ibu' => $row['ttl_ibu'],
            'agama_ibu' => $row['agama_ibu'],
            'kewarganegaraan_ibu' => $row['kewarganegaraan_ibu'],
            'pendidikan_ibu' => $row['pendidikan_ibu'],
            'pekerjaan_ibu' => $row['pekerjaan_ibu'],
            'penghasilan_ibu' => $row['penghasilan_ibu'],
            'alamat_no_ibu' => $row['alamat_ibu'],
            'is_ibu_alive' => $row['ibu_masih_hidup'],
            'nama_wali' => $row['nama_wali'],
            'ttl_wali' => $row['ttl_wali'],
            'agama_wali' => $row['agama_wali'],
            'kewarganegaraan_wali' => $row['kewarganegaraan_wali'],
            'pendidikan_wali' => $row['pendidikan_wali'],
            'pekerjaan_wali' => $row['pekerjaan_wali'],
            'penghasilan_wali' => $row['penghasilan_wali'],
            'alamat_no_wali' => $row['alamat_wali'],
            'kesenian' => $row['kesenian'],
            'olahraga' => $row['olahraga'],
            'organisasi' => $row['kemasyarakatanorganisasi'],
            'lain_lain' => $row['lain_lain'],
            'beasiswa_tahun' => $row['tahun_menerima'],
            'beasiswa_kelas' => $row['menerima_di_kelas'],
            'beasiswa_dari' => $row['dari'],
            'meninggalkan_tahun' => $row['dari'],
            'meninggalkan_alasan' => $row['alasan_meninggalkan'],
            'akhir_tahun' => $row['lulus_tahun'],
            'akhir_no_ijazah' => $row['nomor_ijazah_kelulusan'],
            'akhir_no_stl' => $row['nomor_stl'],
            'akhir_nilai_avg' => $row['nilai_rata_rata'],
            'melanjutkan' => $row['nilai_rata_rata'],
            'bekerja' => $row['nilai_rata_rata']

        ]);
    }
}
