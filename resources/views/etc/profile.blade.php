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
              <h1 class="m-0">Profil</h1>
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
            <div class="row mt-4">
                <div class="col-4">
                    <div class="card h-100">
                        <div class="card-header main-color" style="
                        height: 45px;"></div>
                        <div class="card-body d-flex justify-content-center">
                            <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                            <img class="profilePhoto" src="{{ asset('img') }}/profiles/frizzyardhani-after.jpg" alt="">
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-1" style="
                            height: 19px;
                        ">
                            <h3 class="text-primary fw-bold">{{ Str::ucfirst(Auth::user()->name) }}</h3>
                           </div>
                            <div class="col-12 d-flex justify-content-center">
                            <h4 class="text-secondary">{{ Str::ucfirst(Auth::user()->roles) }}</h4>
                           </div>
                           {{--  --}}
                            <div style="border-top:1px solid gray; width: 273px;" class="col-12 mx-auto">
                            <div class="row py-2">
                                <div class="col-6 px-0"><h5 class="fw-bold">Username</h5></div>
                                <div class="col-6 text-end py-auto px-0"><h5>{{ Str::ucfirst(Auth::user()->name) }}</h5></div>
                            </div>
                           </div>
                           {{--  --}}
                            <div style="border-top:1px solid gray; width: 273px;" class="col-12 mx-auto">
                            <div class="row py-2">
                                <div class="col-6 px-0"><h5 class="fw-bold">Email</h5></div>
                                <div class="col-6 text-end py-auto px-0"><h5>{{ Auth::user()->email }}</h5></div>
                            </div>
                           </div>
                           {{--  --}}
                            <div style="border-top:1px solid gray; width: 273px;" class="col-12 mx-auto">
                            <div class="row py-2">
                                <div class="col-6 px-0"><h5 class="fw-bold">Telp</h5></div>
                                <div class="col-6 text-end py-auto px-0"><h5>{{ Auth::user()->hp }}</h5></div>
                            </div>
                           </div>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card h-100">
                        <div class="card-header main-color" style="
                        height: 45px;">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="my-1">Data Pribadi</h5>
                            </div>
                        </div>
                        </div>
                            {{-- card header --}}
                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col-4 mt-1">
                                    <h5 class="fw-bold">Nama Lengkap</h5>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" placeholder="{{ Str::ucfirst(Auth::user()->name) }}">
                                </div>
                            

                                
                                <div class="col-4 mt-4"><h5 class="fw-bold">Jenis Kelamin</h5></div>
                                <div class="col-8 mt-3 py-2">
                                    <input type="radio" class="mr-1" value="l" name="gender" {{ Auth::user()->gender == 'l' ? 'checked' : ''   }}>Laki-laki
                                    <input type="radio" class="mr-1" value="p" name="gender" {{ Auth::user()->gender == 'p' ? 'checked' : ''   }}>Perempuan
                                </div>
                                
                                <div class="col-4 mt-4"><h5 class="fw-bold">Tanggal Lahir</h5></div>
                                <div class="col-8 mt-3 py-2">
                                    <input type="date" class="form-control" name="tglLahir" value="{{ Auth::user()->ttl }}">
                                </div>
                                
                                <div class="col-4 mt-4"><h5 class="fw-bold">Email</h5></div>
                                <div class="col-8 mt-3"><input type="number" class="form-control" placeholder="{{ Auth::user()->email }}"></div>
                                
                                <div class="col-4 mt-4"><h5 class="fw-bold">Nomor HP</h5></div>
                                <div class="col-8 mt-3"><input type="number" class="form-control" placeholder="{{ Str::ucfirst(Auth::user()->hp) }}"></div>

                                <div class="col-4 mt-4"><h5 class="fw-bold">Foto Profil</h5></div>
                                <div class="col-8 mt-3">
                                    <div class="input-group">
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="inputGroupFile02">
                                          <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                        </div>
                                      </div>
                                </div>
                                
                                
                                <div class="col-4 mt-4"><h5 class="fw-bold">Password</h5></div>
                                <div class="col-8 mt-3"><input type="password" class="form-control" placeholder="Kosongi jika tidak ingin diubah"></div>
                                
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="button" class="btn btn-hijau mr-2">Simpan</button>
                                    <button type="button" onclick="history.back()" class="btn btn-primary">Kembali</button>
                                </div>
                            </div>
                        </div> 
                        {{-- card body --}}
                </div>
                {{-- card --}}
                </div>
                {{-- col-8 --}}
            </div>
        </div>
      </section>

    </div>
    {{-- konten --}}
  </div>
  <!-- ./wrapper -->
  
@endsection
