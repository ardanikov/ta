@extends('layouts.app')
@extends('layouts.modals2')
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
              <h1 class="m-0">Siswa</h1>
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
                    <h3 class="mt-3 ms-4">Data Siswa</h2>
                        <div class="row">
                            <div class="col-6">
                              {{-- <button type="submit" class="btn btn-primary" style="background-color: #198754;border: none;margin-left: 23px;margin-top: 3px;"><svg style="
                              margin-right: 5px;
                              height: 14px;
                              width: 14px;
                              margin-top: -3px;
                          " width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"> --}}
                          
                          
                              {{-- <path d="M6.3745 5.42111L8.55 3.23557V12.3483C8.55 12.6004 8.65009 12.8421 8.82825 13.0203C9.00641 13.1985 9.24804 13.2986 9.5 13.2986C9.75196 13.2986 9.99359 13.1985 10.1718 13.0203C10.3499 12.8421 10.45 12.6004 10.45 12.3483V3.23557L12.6255 5.42111C12.7138 5.51018 12.8189 5.58087 12.9347 5.62911C13.0504 5.67735 13.1746 5.70219 13.3 5.70219C13.4254 5.70219 13.5496 5.67735 13.6653 5.62911C13.7811 5.58087 13.8862 5.51018 13.9745 5.42111C14.0635 5.33278 14.1342 5.22768 14.1824 5.11189C14.2307 4.99609 14.2555 4.87189 14.2555 4.74645C14.2555 4.621 14.2307 4.4968 14.1824 4.38101C14.1342 4.26521 14.0635 4.16011 13.9745 4.07178L10.1745 0.27083C10.0842 0.18432 9.97761 0.116507 9.861 0.0712806C9.62971 -0.0237602 9.37029 -0.0237602 9.139 0.0712806C9.02239 0.116507 8.91585 0.18432 8.8255 0.27083L5.0255 4.07178C4.93692 4.16038 4.86666 4.26556 4.81872 4.38132C4.77079 4.49708 4.74611 4.62115 4.74611 4.74645C4.74611 4.87174 4.77079 4.99581 4.81872 5.11157C4.86666 5.22733 4.93692 5.33252 5.0255 5.42111C5.11408 5.50971 5.21923 5.57999 5.33496 5.62794C5.45069 5.67589 5.57473 5.70057 5.7 5.70057C5.82527 5.70057 5.94931 5.67589 6.06504 5.62794C6.18077 5.57999 6.28592 5.50971 6.3745 5.42111ZM18.05 11.3981C17.798 11.3981 17.5564 11.4982 17.3782 11.6764C17.2001 11.8546 17.1 12.0963 17.1 12.3483V16.1493C17.1 16.4013 16.9999 16.643 16.8218 16.8212C16.6436 16.9994 16.402 17.0995 16.15 17.0995H2.85C2.59804 17.0995 2.35641 16.9994 2.17825 16.8212C2.00009 16.643 1.9 16.4013 1.9 16.1493V12.3483C1.9 12.0963 1.79991 11.8546 1.62175 11.6764C1.44359 11.4982 1.20196 11.3981 0.95 11.3981C0.698044 11.3981 0.456408 11.4982 0.278249 11.6764C0.100089 11.8546 0 12.0963 0 12.3483V16.1493C0 16.9053 0.300267 17.6304 0.834746 18.165C1.36922 18.6997 2.09413 19 2.85 19H16.15C16.9059 19 17.6308 18.6997 18.1653 18.165C18.6997 17.6304 19 16.9053 19 16.1493V12.3483C19 12.0963 18.8999 11.8546 18.7218 11.6764C18.5436 11.4982 18.302 11.3981 18.05 11.3981Z" fill="white"/>
                              </svg>
                               Import</button>
                               <button type="submit" class="btn btn-primary" style="background-color: #ffffff;border: 1px solid #198754;margin-left: 4px;margin-top: 3px; color:#198754;"><svg style="
                                margin-right: 5px;
                                height: 14px;
                                width: 14px;
                                margin-top: -3px;
                            " width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.05 11.4C17.798 11.4 17.5564 11.5001 17.3782 11.6782C17.2001 11.8564 17.1 12.098 17.1 12.35V16.15C17.1 16.402 16.9999 16.6436 16.8218 16.8218C16.6436 16.9999 16.402 17.1 16.15 17.1H2.85C2.59804 17.1 2.35641 16.9999 2.17825 16.8218C2.00009 16.6436 1.9 16.402 1.9 16.15V12.35C1.9 12.098 1.79991 11.8564 1.62175 11.6782C1.44359 11.5001 1.20196 11.4 0.95 11.4C0.698044 11.4 0.456408 11.5001 0.278249 11.6782C0.100089 11.8564 0 12.098 0 12.35V16.15C0 16.9059 0.300267 17.6308 0.834746 18.1653C1.36922 18.6997 2.09413 19 2.85 19H16.15C16.9059 19 17.6308 18.6997 18.1653 18.1653C18.6997 17.6308 19 16.9059 19 16.15V12.35C19 12.098 18.8999 11.8564 18.7218 11.6782C18.5436 11.5001 18.302 11.4 18.05 11.4ZM8.8255 13.0245C8.91585 13.111 9.02239 13.1788 9.139 13.224C9.25272 13.2743 9.37567 13.3002 9.5 13.3002C9.62433 13.3002 9.74728 13.2743 9.861 13.224C9.97761 13.1788 10.0842 13.111 10.1745 13.0245L13.9745 9.2245C14.1534 9.04561 14.2539 8.80299 14.2539 8.55C14.2539 8.29701 14.1534 8.05439 13.9745 7.8755C13.7956 7.69661 13.553 7.59611 13.3 7.59611C13.047 7.59611 12.8044 7.69661 12.6255 7.8755L10.45 10.0605V0.95C10.45 0.698044 10.3499 0.456408 10.1718 0.278249C9.99359 0.100089 9.75196 0 9.5 0C9.24804 0 9.00641 0.100089 8.82825 0.278249C8.65009 0.456408 8.55 0.698044 8.55 0.95V10.0605L6.3745 7.8755C6.28592 7.78692 6.18077 7.71666 6.06504 7.66872C5.94931 7.62079 5.82527 7.59611 5.7 7.59611C5.57473 7.59611 5.45069 7.62079 5.33496 7.66872C5.21923 7.71666 5.11408 7.78692 5.0255 7.8755C4.93692 7.96408 4.86666 8.06923 4.81872 8.18496C4.77079 8.30069 4.74611 8.42473 4.74611 8.55C4.74611 8.67527 4.77079 8.79931 4.81872 8.91504C4.86666 9.03077 4.93692 9.13592 5.0255 9.2245L8.8255 13.0245Z" fill="#198754"/>
                                </svg>
                                
                                 Export</button>
                                 {{-- <button data-toggle="modal" data-target="#modal-add-siswa "type="submit" class="btn btn-primary main-color mr-2" style="border: none; height:72%">Tambah Siswa</button> --}}
                                 <form action="/addSiswaUpload" method="post" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                              <input style="border:1px solid black; margin-bottom: 10px" type="file" name="excel" accept=".xlsx">
                              <button type="submit">Upload</button>
                          </form>
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
                        <thead>
                        <tr>
                          <th class="text-center">No</th>
                          <th>NIS</th>
                          <th>NISN</th>
                          <th>Nama Siswa</th>
                          <th>Rombel</th>
                          <th class="text-center">L/P</th>
                          <th class="text-center" style="width: 125.062px;">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($siswa as $index => $s)
                        <tr>
                          <td class="text-center">{{ $index+1 }}</td>
                          <td>{{ $s->nis }}</td>
                          <td>{{ $s->nisn }}</td>
                          <td>{{ $s->nama_lengkap }}</td>
                          <td>{{ Str::upper($s->diterima_jurusan) }}</td>
                          <td class="text-center">{{ Str::upper($s->gender) }}</td>
                          <td class="text-center"><button type="button" style="
                            height: 25px;
                            padding-top: 0px;
                        " class="btn btn-primary"><svg style="
                            margin-right: 3px; margin-bottom: 2px;
                        " width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.1 4.875C8.1 6.3275 6.894 7.5 5.4 7.5C3.906 7.5 2.7 6.3275 2.7 4.875C2.7 3.4225 3.906 2.25 5.4 2.25C6.894 2.25 8.1 3.4225 8.1 4.875ZM10.8 14.5H0V12.75C0 10.8162 2.421 9.25 5.4 9.25C8.379 9.25 10.8 10.8162 10.8 12.75M18 7.5V9.25H9.9V7.5M18 4V5.75H9.9V4M18 0.5V2.25H9.9V0.5H18Z" fill="white"/>
                            </svg>
                             <a href="detail_siswa/{{ $s->id }}" style="color:white; text-decoration:none;">Detail</a></button></td>
                        </tr>
                        @endforeach
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
