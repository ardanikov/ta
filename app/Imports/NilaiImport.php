<?php

namespace App\Imports;

use App\Models\Nilai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NilaiImport implements ToModel, WithHeadingRow
{
    public function headingRow(): int
    {
        return 7;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // $data = ["mapel" => $row['mapel'], "nilai" => ["np" => $row['np'], "nk" => $row['nk'],  "na" => $row['na']]];
        $data = [
            "pa" => $row['pendidikan_agama_islam_dan_budi_pekerti'],
            "ppkn" => $row['pendidikan_pancasila_dan_kewarganegaraan'],
            "bjep" => $row['bahasa_jepang'],
            "bi" => $row['bahasa_indonesia'],
            "mtk" => $row['matematika_umum'],
            "bing" => $row['bahasa_inggris'],
            "an2d" => $row['animasi_2d'],
            "an3d" => $row['animasi_3d'],
            "dp" => $row['digital_prosesing'],
            "pkk" => $row['produk_kreatif_dan_kewirausahaan'],
            "mulok" => $row['muatan_lokal_bahasa_daerah'],
        ];
        $nilai = json_encode($data);
        // foreach ($row as $r) {
        //     dd($r);
        // }

        // dd($data);
        return new Nilai([

            // 'nama' => $row['nama'],
            // 'nama_panggilan' => $row['nama_panggilan'],
            // 'ibu' => $row['ibu'],
            // 'ayah' => $row['ayah'],

            'nama' => $row['nama_peserta_didik'],
            'nisn' => $row['nisn'],
            'nilai' => $nilai,
        ]);
    }
}
