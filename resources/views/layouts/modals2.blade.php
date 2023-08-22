{{-- ADD SISWA --}}'
<div class="modal fade" id="modal-add-siswa">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="m-0" action="addSiswa" method="POST">
            @csrf
        <div class="modal-header main-color">
            <h4 class="modal-title">Tambah Siswa Baru</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Nama Lengkap</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="nama_lengkap" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Nama Panggilan</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="nama_panggilan" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">NISN</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="nisn" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">NIS</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="nis" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">NIK</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="nik" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Rombongan Belajar</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="rombel" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Jenis Kelamin</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="gender" class="form-control" placeholder="">
            </div>
            {{--  --}}

            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Tempat & Tanggal Lahir</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="ttl" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Agama</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="agama" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Kewarganegaraan</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="kewarganegaraan" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Anak Ke</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="anak_ke" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Jumlah Saudara Kandung</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="jml_saudara_kandung" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Jumlah Saudara Angkat</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="jml_saudara_angkat" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Jumlah Saudara Tiri</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="jml_saudara_tiri" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Yatim ?</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="is_yatim" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Bahasa Sehari-hari</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="bahasa" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Alamat</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="alamat" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">No Telp</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="telp" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Tinggal di</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="tinggal" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Jarak Tempat Tinggal</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="jarak_tinggal" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Golongan Darah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="goldar" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Penyakit Bawaan</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="penyakit_bawaan" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Kelainan Jasmani</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="kelainan_jasmani" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Tinggi & Berat Badan</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="tb" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Tamatan Dari</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="tamatan_dari" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Tanggal dan Nomor Ijazah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="tgl_no_ijazah" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Tanggal dan Nomor STL</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="tgl_no_stl" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Lama Belajar</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="lama_belajar" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Pindahan Dari Sekolah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="dari_sekolah" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Alasan Pindah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="alasan_pindah" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Diterima Dikelas</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="diterima_dikelas" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Diterima di Program Studi</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="diterima_jurusan" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Diterima Tanggal</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="diterima_date" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Nama Lengkap Ayah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="nama_ayah" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Tempat dan Tgl Lahir Ayah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="ttl_ayah" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Agama Ayah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="agama_ayah" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Kewarganegaraan Ayah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="kewarganegaraan_ayah" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Pendidikan Ayah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="pendidikan_ayah" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Pekerjaan Ayah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Penghasilan Perbulan Ayah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="penghasilan_ayah" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Alamat/No.Telepon/HP Ayah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="alamat_no_ayah" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Masih Hidup / Meninggal Dunia</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="is_ayah_alive" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Nama Lengkap Ibu</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="nama_ibu" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Tempat dan Tgl Lahir Ibu</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="ttl_ibu" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Agama Ibu</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="agama_ibu" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Kewarganegaraan Ibu</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="kewarganegaraan_ibu" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Pendidikan Ibu</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="pendidikan_ibu" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Pekerjaan Ibu</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Penghasilan Perbulan Ibu</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="penghasilan_ibu" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Alamat/No.Telepon/HP Ibu</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="alamat_no_ibu" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Masih Hidup / Meninggal Dunia</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="is_ibu_alive" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Nama Lengkap Wali</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="nama_wali" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Tempat dan Tgl Lahir Wali</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="ttl_wali" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Agama Wali</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="agama_wali" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Kewarganegaraan Wali</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="kewarganegaraan_wali" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Pendidikan Wali</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="pendidikan_wali" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Pekerjaan Wali</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="pekerjaan_wali" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Penghasilan Perbulan Wali</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="penghasilan_wali" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Alamat/No.Telepon/HP Wali</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="alamat_no_wali" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px"></h5>Kegemaran Kesenian</div>
            <div class="col-6 mb-2">
                <input type="text" name="kesenian" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Kegemaran Olah Raga</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="olahraga" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Kegemaran Kemasyarakatan/Organisasi</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="organisasi" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Kegemaran Lain-lain</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="lain_lain" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Tahun Menerima Beasiswa</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="beasiswa_tahun" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Kelas Menerima Beasiswa</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="beasiswa_kelas" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Menerima Beasiswa Dari</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="beasiswa_dari" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Tanggal Meninggalkan Sekolah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="meninggalkan_tahun" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Alasan Meninggalkan Sekolah ini</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="meninggalkan_alasan" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Lulus Tahun</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="akhir_tahun" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Nomor Ijazah</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="akhir_no_ijazah" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Nomor STL</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="akhir_no_stl" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Nilai Rata-rata yang Dicapai</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="akhir_nilai_avg" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Akan Melanjutkan Ke-</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="melanjutkan" class="form-control" placeholder="">
            </div>
            {{--  --}}
            <div class="col-6 mb-2 d-flex"><h5 class="d-flex my-auto font-size-16px">Akan Bekerja di-</h5></div>
            <div class="col-6 mb-2">
                <input type="text" name="bekerja" class="form-control" placeholder="">
            </div>
            {{--  --}}
          
        </div>
        </div>
        <div class="modal-footer justify-content-end">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->