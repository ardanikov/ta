@extends('layouts.app')

@section('content')
<div class="wrapper">
  
    <!-- Navbar -->
    @extends('layouts.navbar')
  
    <!-- Main Sidebar Container -->
    @extends('layouts.sidebar')
    <!-- Main Footer -->
    @include('layouts.footer')

    <div class="konten" style="margin-left:262px">
    <div class="content-header p-2 mt-1" style="
    border-block-width: thin;
    border-bottom-color: #A5A4A4;
    border-bottom-style: solid;
">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Detail Data Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6 pt-1">
              <ol class="breadcrumb float-sm-right">
                <svg class="mt-1 me-1" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.70638 3.75843C9.65113 3.70558 9.57762 3.67609 9.50116 3.67609C9.42471 3.67609 9.3512 3.70558 9.29595 3.75843L2.46411 10.2849C2.4351 10.3126 2.41201 10.346 2.39626 10.3829C2.38051 10.4198 2.37241 10.4596 2.37245 10.4997L2.37134 16.625C2.37134 16.9399 2.49645 17.242 2.71915 17.4647C2.94185 17.6874 3.24389 17.8125 3.55884 17.8125H7.12505C7.28252 17.8125 7.43354 17.7499 7.54489 17.6386C7.65624 17.5272 7.7188 17.3762 7.7188 17.2187V12.1719C7.7188 12.0931 7.75008 12.0176 7.80575 11.9619C7.86143 11.9063 7.93694 11.875 8.01567 11.875H10.9844C11.0632 11.875 11.1387 11.9063 11.1943 11.9619C11.25 12.0176 11.2813 12.0931 11.2813 12.1719V17.2187C11.2813 17.3762 11.3439 17.5272 11.4552 17.6386C11.5666 17.7499 11.7176 17.8125 11.875 17.8125H15.4398C15.7547 17.8125 16.0568 17.6874 16.2795 17.4647C16.5022 17.242 16.6273 16.9399 16.6273 16.625V10.4997C16.6273 10.4596 16.6192 10.4198 16.6035 10.3829C16.5877 10.346 16.5646 10.3126 16.5356 10.2849L9.70638 3.75843Z" fill="#6C757D"/>
                    <path d="M18.2174 9.06025L15.4416 6.40471V2.375C15.4416 2.21753 15.379 2.06651 15.2677 1.95516C15.1563 1.84381 15.0053 1.78125 14.8478 1.78125H13.0666C12.9091 1.78125 12.7581 1.84381 12.6468 1.95516C12.5354 2.06651 12.4728 2.21753 12.4728 2.375V3.5625L10.3235 1.50738C10.1223 1.30402 9.82324 1.1875 9.50001 1.1875C9.17791 1.1875 8.87955 1.30402 8.67841 1.50775L0.785248 9.05951C0.554428 9.28217 0.525483 9.64844 0.735522 9.88965C0.788266 9.95053 0.852847 10 0.925336 10.0352C0.997824 10.0703 1.0767 10.0903 1.15717 10.094C1.23764 10.0977 1.31802 10.085 1.39341 10.0566C1.46881 10.0282 1.53764 9.9848 1.59572 9.92899L9.29591 2.57094C9.35116 2.51809 9.42467 2.48859 9.50113 2.48859C9.57758 2.48859 9.65109 2.51809 9.70634 2.57094L17.4073 9.92899C17.5207 10.0378 17.6727 10.0971 17.8298 10.0941C17.9869 10.091 18.1365 10.0258 18.2456 9.91266C18.4734 9.67664 18.4545 9.28699 18.2174 9.06025Z" fill="#6C757D"/>
                    </svg>
                    
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
        @foreach($detail as $d)
        <form class="m-0" action="updateSiswa/{{ $d->id }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{  method_field('PUT') }}
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                  <div class="card" style="margin-bottom: 6rem; margin-top: 1rem;">
                    {{-- <h3 class="mt-3 ms-4">Detail Data Siswa</h2> --}}
                        <div class="card-body">
                        <div class="konten-detail">
                            <div class="row">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-6">
                                             <button type="button" class="testclick btn btn-success">Edit</button>
                                             <a href="deleteSiswa/{{ $d->id }}" onclick="return confirm('yakin ingin menghapus data ?')" style="text-decoration: none">
                                             <button type="button" class="btn btn-danger">Hapus</button> 
                                            </a>
                                            </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <button type="submit" class="save btn main-color true-invincible">Simpan</button>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                   
                                    
                                </div>
                                    
                                    <table name="lembarBukuInduk" class="table table-striped">
                                        <thead>
                                            <td colspan="2">LEMBAR BUKU INDUK PESERTA DIDIK SMK NEGERI 2 SINGOSARI</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    Nomor Induk Siswa
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="nis" value="{{ $d->nis }}" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    Nomor Induk Siswa Nasional
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible inputdetail" name="nisn" value="{{ $d->nisn }}" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    NIK/Nomor Kartu Keluarga
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="nik" value="{{ $d->nik }}" type="text">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    {{-- ======================== --}}
                                    <table name="keteranganSiswa" class="table table-striped">
                                        <thead>
                                            <td colspan="2">A. KETERANGAN TENTANG DIRI SISWA</td>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    1. Nama Lengkap Siswa<br>
                                                      <p class="bottomtext">Nama Panggilan</p>
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail mb-1"name="nama_lengkap" value="{{ $d->nama_lengkap }}" type="text">
                                                    <input class="invincible bg-invincible inputdetail"name="nama_panggilan" value="{{ $d->nama_panggilan }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    2. Jenis Kelamin
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="gender" value="{{ $d->gender }}" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    3. Tempat dan Tanggal Lahir
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="ttl" value="{{ $d->ttl }}" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    4. Agama
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="agama" value="{{ $d->agama }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    5. Kewarganegaraan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="kewarganegaraan" value="{{ $d->kewarganegaraan }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    6. Anak Ke-
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="anak_ke" value="{{ $d->anak_ke }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    7. Jumlah Saudara Kandung
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="jml_saudara_kandung" value="{{ $d->jml_saudara_kandung }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    8. Jumlah Saudara Angkat
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="jml_saudara_angkat" value="{{ $d->jml_saudara_angkat }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    9. Jumlah Saudara Tiri
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="jml_saudara_tiri" value="{{ $d->jml_saudara_tiri }}" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    10. Anak Yatim/Piatu/Yatim Piatu
                                                </td>
                                                @if($d->is_yatim == 2)
                                                <td class="content-detail-kanan">
                                                    Piatu
                                                </td>
                                                @elseif($d->is_yatim == 1)
                                                <td class="content-detail-kanan">
                                                    Yatim
                                                </td>
                                                @elseif($d->is_yatim == 3)
                                                <td class="content-detail-kanan">
                                                    Yatim Piatu
                                                </td>
                                                @else
                                                <td class="content-detail-kanan">
                                                    -
                                                </td>
                                                @endif
                                                
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    11. Bahasa Sehari-hari di Rumah
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="bahasa" value="{{ $d->bahasa }}" type="text">
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    {{-- ======================== --}}
                                    <table name="keteranganTempatTinggal" class="table table-striped">
                                        <thead>
                                            <td colspan="2">B. KETERANGAN TEMPAT TINGGAL</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    12. Alamat
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="alamat" value="{{ $d->alamat }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    13. No. Telp/HP
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="telp" value="{{ $d->telp }}" type="text">
                                                 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    14. Tinggal dengan Orang Tua / Saudara / Asrama / Kost
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="tinggal" value="{{ Str::ucfirst($d->tinggal) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    15. Jarak Tempat Tinggal dengan Sekolah
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="jarak_tinggal" value="{{ Str::ucfirst($d->jarak_tinggal) }}" type="text">
                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                     {{-- ======================== --}}
                                     <table name="keteranganKesehatan" class="table table-striped">
                                        <thead>
                                            <td colspan="2">C.KETERANGAN KESEHATAN</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    16. Golongan Darah
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="goldar" value="{{ Str::upper($d->goldar) }}" type="text">
                                                   
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    17. Penyakit yang Pernah Diderita 
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="penyakit_bawaan" value="{{ Str::ucfirst($d->penyakit_bawaan) }}" type="text">
                                                  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    18. Kelainan Jasmani
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="kelainan_jasmani" value="{{ Str::ucfirst($d->kelainan_jasmani) }}" type="text">
                                                   
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    19. Tinggi dan Berat Badan (Saat diterima di Sekolah ini)
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="tb" value="{{ Str::upper($d->tb) }}"type="text">
                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                     {{-- ======================== --}}
                                     <table name="keteranganPendidikan" class="table table-striped">
                                        <thead>
                                            <td colspan="3">D.KETERANGAN PENDIDIKAN</td>
                                        </thead>
                                        <tbody>
                                            {{--  --}}
                                            <tr>
                                                <tr>
                                                    <td rowspan="4" class="pendidikan-detail-title">
                                                        20.Pendidikan Sebelumnya
                                                    </td>
                                                    <td class="pendidikan-detail-2">
                                                        a. Tamatan dari
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="tamatan_dari" value="{{ Str::ucfirst($d->tamatan_dari) }}" type="text">
                                                        
                                                    </td>
                                                </tr>
                                            
                                                <tr>
                                                    <td class="pendidikan-detail-2">
                                                        b. Tanggal dan Nomor Ijazah
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="tgl_no_ijazah" value="{{ Str::ucfirst($d->tgl_no_ijazah) }}" type="text">
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pendidikan-detail-2">
                                                        c. Tanggal dan Nomor STL
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="lama_belajar" value="{{ Str::ucfirst($d->lama_belajar) }}" type="text">
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pendidikan-detail-2">
                                                        d. Lama Belajar
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="lama_belajar" value="{{ Str::ucfirst($d->lama_belajar) }}" type="text">
                                                        
                                                    </td>
                                                </tr>
                                            </tr>

                                            {{--  --}}
                                            <tr>
                                                <tr>
                                                    <td rowspan="2" class="pendidikan-detail-title">
                                                        21. Pindahan
                                                    </td>
                                                    <td class="pendidikan-detail-2">
                                                        a. Dari Sekolah
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="dari_sekolah" value="{{ Str::ucfirst($d->dari_sekolah) }}" type="text">
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pendidikan-detail-2">
                                                        b. Alasan
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="alasan_pindah" value="{{ Str::ucfirst($d->alasan_pindah) }}" type="text">
                                                        
                                                    </td>
                                                </tr>  
                                            </tr>
                                            {{--  --}}
                                            <tr>
                                                <tr>
                                                    <td rowspan="3" class="pendidikan-detail-title">
                                                        22. Diterima di Sekolah ini
                                                    </td>
                                                    <td class="pendidikan-detail-2">
                                                        a. Dikelas
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="diterima_dikelas" value="{{ Str::ucfirst($d->diterima_dikelas) }}" type="text">
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pendidikan-detail-2">
                                                        b. Kelompok / Program Studi
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="diterima_jurusan" value="{{ Str::ucfirst($d->diterima_jurusan) }}" type="text">
                                                        
                                                    </td>
                                                </tr>  
                                                <tr>
                                                    <td class="pendidikan-detail-2">
                                                        c. Tanggal / Bulan / Tahun
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="diterima_date" value="{{ Str::ucfirst($d->diterima_date) }}" type="text">
                                                        
                                                    </td>
                                                </tr>  
                                            </tr>

                                        </tbody>
                                    </table>
                                    {{-- ======================== --}}
                                    <table name="keteranganAyah" class="table table-striped">
                                        <thead>
                                            <td colspan="2">E.KETERANGAN TENTANG AYAH KANDUNG</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    23. Nama Lengkap
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="nama_ayah" value="{{ Str::ucfirst($d->nama_ayah) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    24. Tempat dan Tgl Lahir
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="ttl_ayah" value="{{ Str::ucfirst($d->ttl_ayah) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    25. Agama
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="agama_ayah" value="{{ Str::ucfirst($d->agama_ayah) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    26. Kewarganegaraan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="kewarganegaraan_ayah" value="{{ Str::ucfirst($d->kewarganegaraan_ayah) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    27. Pendidikan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="pendidikan_ayah" value="{{ Str::ucfirst($d->pendidikan_ayah) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    28. Pekerjaan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="pekerjaan_ayah" value="{{ Str::ucfirst($d->pekerjaan_ayah) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    29. Penghasilan Perbulan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="penghasilan_ayah" value="{{ Str::ucfirst($d->penghasilan_ayah) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    30. Alamat/No.Telepon/HP
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="alamat_no_ayah" value="{{ Str::ucfirst($d->alamat_no_ayah) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    31. Masih Hidup / Meninggal Dunia
                                                </td>
                                                <td class="content-detail-kanan">
                                                    Masih Hidup
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    {{-- ======================== --}}
                                    <table name="keteranganIbu" class="table table-striped">
                                        <thead>
                                            <td colspan="2">F.KETERANGAN TENTANG IBU KANDUNG</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    32. Nama Lengkap
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="nama_ibu" value="{{ Str::ucfirst($d->nama_ibu) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    33. Tempat dan Tgl Lahir
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="ttl_ibu" value="{{ Str::ucfirst($d->ttl_ibu) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    34. Agama
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="agama_ibu" value="{{ Str::ucfirst($d->agama_ibu) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    35. Kewarganegaraan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="kewarganegaraan_ibu" value="{{ Str::ucfirst($d->kewarganegaraan_ibu) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    36. Pendidikan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="pendidikan_ibu" value="{{ Str::ucfirst($d->pendidikan_ibu) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    37. Pekerjaan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="pekerjaan_ibu" value="{{ Str::ucfirst($d->pekerjaan_ibu) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    38. Penghasilan Perbulan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="penghasilan_ibu" value="{{ Str::ucfirst($d->penghasilan_ibu) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    39. Alamat/No.Telepon/HP
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="alamat_no_ibu" value="{{ Str::ucfirst($d->alamat_no_ibu) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    40. Masih Hidup / Meninggal Dunia
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="is_ibu_alive" value="{{ Str::ucfirst($d->is_ibu_alive) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    {{-- ======================== --}}
                                    <table name="keteranganWali" class="table table-striped">
                                        <thead>
                                            <td colspan="2">G.KETERANGAN TENTANG WALI</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    41. Nama Lengkap
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="nama_wali" value="{{ Str::ucfirst($d->nama_wali) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    42. Tempat dan Tgl Lahir
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="ttl_wali" value="{{ Str::ucfirst($d->ttl_wali) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    43. Agama
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="ttl_wali" value="{{ Str::ucfirst($d->ttl_wali) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    44. Kewarganegaraan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="kewarganegaraan_wali" value="{{ Str::ucfirst($d->kewarganegaraan_wali) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    45. Pendidikan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="pendidikan_wali" value="{{ Str::ucfirst($d->pendidikan_wali) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    46. Pekerjaan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="pekerjaan_wali" value="{{ Str::ucfirst($d->pekerjaan_wali) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    47. Penghasilan Perbulan
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="penghasilan_wali" value="{{ Str::ucfirst($d->penghasilan_wali) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    48. Alamat/No.Telepon/HP
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="alamat_no_wali" value="{{ Str::ucfirst($d->alamat_no_wali) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    {{-- ======================== --}}
                                    <table name="kegemaranSiswa" class="table table-striped">
                                        <thead>
                                            <td colspan="2">H. KEGEMARAN SISWA</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    49. Kesenian
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="kesenian" value="{{ Str::ucfirst($d->kesenian) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    50. Olah Raga
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="olahraga" value="{{ Str::ucfirst($d->olahraga) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    51. Kemasyarakatan/Organisasi
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="organisasi" value="{{ Str::ucfirst($d->organisasi) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    52. Lain-lain
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="lain_lain" value="{{ Str::ucfirst($d->lain_lain) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                     {{-- ======================== --}}
                                     <table name="keteranganPerkembangan" class="table table-striped">
                                        <thead>
                                            <td colspan="3">I.KETERANGAN PERKEMBANGAN SISWA</td>
                                        </thead>
                                        <tbody>
                                            {{--  --}}
                                            <tr>
                                                <tr>
                                                    <td rowspan="3" class="pendidikan-detail-title">
                                                        53. Menerima Beasiswa
                                                    </td>
                                                    <td class="pendidikan-detail-2">
                                                        a. Tahun
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="beasiswa_tahun" value="{{ Str::ucfirst($d->beasiswa_tahun) }}" type="text">
                                                        
                                                    </td>
                                                </tr>
                                            
                                                <tr>
                                                    <td class="pendidikan-detail-2">
                                                        b. Kelas
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="beasiswa_kelas" value="{{ Str::ucfirst($d->beasiswa_kelas) }}" type="text">
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pendidikan-detail-2">
                                                        c. Dari
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="beasiswa_dari" value="{{ Str::ucfirst($d->beasiswa_dari) }}" type="text">
                                                        
                                                    </td>
                                                </tr>
                                            </tr>

                                            {{--  --}}
                                            <tr>
                                                <tr>
                                                    <td rowspan="2" class="pendidikan-detail-title">
                                                        54. Meninggalkan Sekolah ini
                                                    </td>
                                                    <td class="pendidikan-detail-2">
                                                        a. Tanggal Meninggalkan Sekolah
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="meninggalkan_tahun" value="{{ Str::ucfirst($d->meninggalkan_tahun) }}" type="text">
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pendidikan-detail-2">
                                                        b. Alasan
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="meninggalkan_alasan" value="{{ Str::ucfirst($d->meninggalkan_alasan) }}" type="text">
                                                        
                                                    </td>
                                                </tr>  
                                            </tr>
                                            {{--  --}}
                                            <tr>
                                                <tr>
                                                    <td rowspan="4" class="pendidikan-detail-title">
                                                        55. Akhir Pendidikan
                                                    </td>
                                                    <td class="pendidikan-detail-2">
                                                        a. Lulus Tahun
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="akhir_tahun" value="{{ Str::ucfirst($d->akhir_tahun) }}" type="text">
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pendidikan-detail-2">
                                                        b. Nomor Ijazah
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="akhir_no_ijazah" value="{{ Str::ucfirst($d->akhir_no_ijazah) }}" type="text">
                                                        
                                                    </td>
                                                </tr>  
                                                <tr>
                                                    <td class="pendidikan-detail-2">
                                                        c. Nomor STL
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="akhir_no_stl" value="{{ Str::ucfirst($d->akhir_no_stl) }}" type="text">
                                                        
                                                    </td>
                                                </tr>  
                                                <tr>
                                                    <td class="pendidikan-detail-2">
                                                        d. Nilai Rata-rata yang Dicapai
                                                    </td>
                                                    <td class="pendidikan-detail-3">
                                                        <input class="invincible bg-invincible inputdetail"name="akhir_nilai_avg" value="{{ Str::ucfirst($d->akhir_nilai_avg) }}" type="text">
                                                        
                                                    </td>
                                                </tr>  
                                            </tr>

                                        </tbody>
                                    </table>
                                    {{-- ======================== --}}
                                    <table name="keteranganSelesai" class="table table-striped">
                                        <thead>
                                            <td colspan="2">J. KETERANGAN SETELAH SELESAI PENDIDIKAN</td>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    56. Akan Melanjutkan Ke-
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="melanjutkan" value="{{ Str::ucfirst($d->melanjutkan) }}" type="text">
                                                   
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="content-detail-kiri">
                                                    57. Akan Bekerja di-
                                                </td>
                                                <td class="content-detail-kanan">
                                                    <input class="invincible bg-invincible inputdetail"name="bekerja" value="{{ Str::ucfirst($d->bekerja) }}" type="text">
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>

                                <div class="col-4">
                                    <img class="img-properties" id="preview-image" src="{{ asset('storage') }}/img/siswa/before/{{ $d->foto }}" alt="{{ $d->foto }}">
                                    <h5 style="
                                    margin-top: 16px;
                                    margin-bottom: 16px;
                                ">Foto Saat Masuk</h5>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <button type="button" class="btn btn-outline-primary">Upload</button>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" name="foto" class="custom-file-input" accept=".png, .jpg" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>

                                    <img style="margin-top:23px;" class="img-properties" id="preview-image-2" src="{{ asset('storage') }}/img/siswa/after/{{ $d->foto_after }}" alt="{{ $d->foto }}">
                                    <h5 style="
                                    margin-top: 16px;
                                    margin-bottom: 16px;
                                ">Foto Saat Keluar</h5>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <button type="button" class="btn btn-outline-primary">Upload</button>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" name="foto-after"  class="custom-file-input" accept=".png, .jpg" id="inputGroupFile02">
                                      <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                  </div>
                                  {{-- col-4 --}}
                            </div>
                            {{-- row --}}
                        </div>
                        {{-- konten detail --}}
                    </div>
                    {{-- card body --}}
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
        </div>
    </form>
    @endforeach
      </section>

    </div>
    {{-- konten --}}
  </div>
  <!-- ./wrapper -->
@endsection
