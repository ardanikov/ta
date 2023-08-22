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
              <h1 class="m-0">Anggota Kelas</h1>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                  <div class="card" style="margin-bottom: 6rem; margin-top: 1rem;">
                    <h5 class="mt-3 ms-4">Anggota Kelas Rekayasa Perangkat Lunak 2022/2023 Semester Genap</h5>
                        <div class="row">
                            <div class="col-6"><button type="submit" class="btn btn-primary" style="background-color: #198754;border: none;margin-left: 23px;margin-top: 3px;"><svg style="
                              margin-right: 5px;
                              height: 14px;
                              width: 14px;
                              margin-top: -3px;
                          " width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6.3745 5.42111L8.55 3.23557V12.3483C8.55 12.6004 8.65009 12.8421 8.82825 13.0203C9.00641 13.1985 9.24804 13.2986 9.5 13.2986C9.75196 13.2986 9.99359 13.1985 10.1718 13.0203C10.3499 12.8421 10.45 12.6004 10.45 12.3483V3.23557L12.6255 5.42111C12.7138 5.51018 12.8189 5.58087 12.9347 5.62911C13.0504 5.67735 13.1746 5.70219 13.3 5.70219C13.4254 5.70219 13.5496 5.67735 13.6653 5.62911C13.7811 5.58087 13.8862 5.51018 13.9745 5.42111C14.0635 5.33278 14.1342 5.22768 14.1824 5.11189C14.2307 4.99609 14.2555 4.87189 14.2555 4.74645C14.2555 4.621 14.2307 4.4968 14.1824 4.38101C14.1342 4.26521 14.0635 4.16011 13.9745 4.07178L10.1745 0.27083C10.0842 0.18432 9.97761 0.116507 9.861 0.0712806C9.62971 -0.0237602 9.37029 -0.0237602 9.139 0.0712806C9.02239 0.116507 8.91585 0.18432 8.8255 0.27083L5.0255 4.07178C4.93692 4.16038 4.86666 4.26556 4.81872 4.38132C4.77079 4.49708 4.74611 4.62115 4.74611 4.74645C4.74611 4.87174 4.77079 4.99581 4.81872 5.11157C4.86666 5.22733 4.93692 5.33252 5.0255 5.42111C5.11408 5.50971 5.21923 5.57999 5.33496 5.62794C5.45069 5.67589 5.57473 5.70057 5.7 5.70057C5.82527 5.70057 5.94931 5.67589 6.06504 5.62794C6.18077 5.57999 6.28592 5.50971 6.3745 5.42111ZM18.05 11.3981C17.798 11.3981 17.5564 11.4982 17.3782 11.6764C17.2001 11.8546 17.1 12.0963 17.1 12.3483V16.1493C17.1 16.4013 16.9999 16.643 16.8218 16.8212C16.6436 16.9994 16.402 17.0995 16.15 17.0995H2.85C2.59804 17.0995 2.35641 16.9994 2.17825 16.8212C2.00009 16.643 1.9 16.4013 1.9 16.1493V12.3483C1.9 12.0963 1.79991 11.8546 1.62175 11.6764C1.44359 11.4982 1.20196 11.3981 0.95 11.3981C0.698044 11.3981 0.456408 11.4982 0.278249 11.6764C0.100089 11.8546 0 12.0963 0 12.3483V16.1493C0 16.9053 0.300267 17.6304 0.834746 18.165C1.36922 18.6997 2.09413 19 2.85 19H16.15C16.9059 19 17.6308 18.6997 18.1653 18.165C18.6997 17.6304 19 16.9053 19 16.1493V12.3483C19 12.0963 18.8999 11.8546 18.7218 11.6764C18.5436 11.4982 18.302 11.3981 18.05 11.3981Z" fill="white"/>
                              </svg>
                               Tambah</button>
                              </div>
                            <div class="col-6 d-flex justify-content-end" style="padding-right: 28px;">
                                <div class="input-group mb-3" style="
                                width: 47%;">
                                    <input type="text" id="searchSiswa" class="form-control" placeholder="Ketikkan sesuatu" aria-label="Ketikkan sesuatu" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                   <span class="input-group-text" id="basic-addon2" style="
                                   background-color: #24436A;
                               ">  <a href="javascript:void(0)"><span class="fa fa-search" style="
                                color: white;"></span></a></span>
                                    </div>
                                  </div>                                  
                            </div>
                        </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="
                    margin-top: -17px;">
                      <table id="dataSiswa" class="table table-bordered table-striped">
                        <thead class="text-center">
                        <tr>
                          <th class="text-center">No</th>
                          <th>NIS</th>
                          <th>NISN</th>
                          <th>Nama Siswa</th>
                          <th>Tanggal Lahir</th>
                          <th>L/P</th>
                          <th>Status</th>
                          <th style="width: 90px;">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td class="text-center">1</td>
                          <td>310</td>
                          <td>0084692742</td>
                          <td>A. RIFQI KHILMI</td>
                          <td class="text-center">2008-08-08</td>
                          <td class="text-center">L</td>
                          <td class="text-center">Naik Kelas</td>
                          <td class="d-flex justify-content-center"><div class="row">
                            <div class="col-12 pl-0">
                        <a href="javascript:void(0)" style="color:white; text-decoration:none;">
                      <button type="button" style="
                      width: 30px;
                  " class="btn btn-danger d-flex justify-content-center">
                        <span class="fa fa-trash text-white"></span>                        
                    </button></a>
                </div>
                </div></td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>310</td>
                            <td>0084692742</td>
                            <td>A. RIFQI KHILMI</td>
                            <td class="text-center">2008-08-08</td>
                            <td class="text-center">L</td>
                            <td class="text-center">Naik Kelas</td>
                            <td class="d-flex justify-content-center"><div class="row">
                              <div class="col-12 pl-0">
                          <a href="javascript:void(0)" style="color:white; text-decoration:none;">
                        <button type="button" style="
                        width: 30px;
                    " class="btn btn-danger d-flex justify-content-center">
                          <span class="fa fa-trash text-white"></span>                        
                      </button></a>
                  </div>
                  </div></td>
                          </tr>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
        </div>
      </section>

    </div>
    {{-- konten --}}
  </div>
  <!-- ./wrapper -->

@endsection
