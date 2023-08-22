<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_detail_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap', 50);
            $table->string('nama_panggilan', 20);
            $table->string('ttl', 20);
            $table->string('agama', 20);
            $table->string('kewarganegaraan', 25);
            $table->tinyInteger('anak_ke');
            $table->tinyInteger('jml_saudara_kandung');
            $table->tinyInteger('jml_saudara_tiri');
            $table->tinyInteger('is_yatim');
            $table->string('bahasa', 30);
            $table->string('alamat', 150);
            $table->string('telp', 16);
            $table->string('tinggal', 30);
            $table->string('jarak_tinggal', 20);
            $table->string('goldar', 2)->nullable();
            $table->string('penyakit_bawaan', 30)->nullable();
            $table->string('kelainan_jasmani', 30)->nullable();
            $table->string('tb', 5);
            $table->string('tamatan_dari', 50);
            $table->string('tgl_no_ijazah', 50);
            $table->string('tgl_no_stl', 50)->nullable();
            $table->string('lama_belajar', 2);
            $table->string('dari_sekolah', 50)->nullable();
            $table->string('alasan_pindah', 100)->nullable();
            $table->string('diterima_dikelas', 2);
            $table->string('diterima_jurusan', 3);
            $table->string('diterima_date', 30);
            $table->string('nama_ayah', 50)->nullable();
            $table->string('ttl_ayah', 20)->nullable();
            $table->string('agama_ayah', 30)->nullable();
            $table->string('kewarganegaraan_ayah', 30)->nullable();
            $table->string('pendidikan_ayah', 30)->nullable();
            $table->string('pekerjaan_ayah', 30)->nullable();
            $table->string('penghasilan_ayah', 30)->nullable();
            $table->string('alamat_no_ayah', 100)->nullable();
            $table->string('is_ayah_alive', 1)->nullable();
            $table->string('nama_ibu', 50)->nullable();
            $table->string('ttl_ibu', 20)->nullable();
            $table->string('agama_ibu', 30)->nullable();
            $table->string('kewarganegaraan_ibu', 30)->nullable();
            $table->string('pendidikan_ibu', 30)->nullable();
            $table->string('pekerjaan_ibu', 30)->nullable();
            $table->string('penghasilan_ibu', 30)->nullable();
            $table->string('alamat_no_ibu', 100)->nullable();
            $table->string('is_ibu_alive', 1)->nullable();
            $table->string('nama_wali', 50)->nullable();
            $table->string('ttl_wali', 20)->nullable();
            $table->string('agama_wali', 30)->nullable();
            $table->string('kewarganegaraan_wali', 30)->nullable();
            $table->string('pendidikan_wali', 30)->nullable();
            $table->string('pekerjaan_wali', 30)->nullable();
            $table->string('penghasilan_wali', 30)->nullable();
            $table->string('alamat_no_wali', 100)->nullable();
            $table->string('kesenian', 30)->nullable();
            $table->string('olahraga', 30)->nullable();
            $table->string('organisasi', 30)->nullable();
            $table->string('lain_lain', 150)->nullable();
            $table->string('beasiswa_tahun', 4)->nullable();
            $table->string('beasiswa_kelas', 30)->nullable();
            $table->string('beasiswa_dari', 30)->nullable();
            $table->string('meninggalkan_tahun', 4)->nullable();
            $table->string('meninggalkan_alasan', 100)->nullable();
            $table->string('akhir_tahun', 4)->nullable();
            $table->string('akhir_no_ijazah', 30)->nullable();
            $table->string('akhir_no_stl', 30)->nullable();
            $table->string('akhir_nilai_avg', 5)->nullable();
            $table->string('melanjutkan', 30)->nullable();
            $table->string('bekerja', 30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_detail_siswa');
    }
};
