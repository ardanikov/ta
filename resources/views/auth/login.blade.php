@extends('layouts.applogin')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="row">
    <div class="col-6 d-flex justify-content-center text-center">

        <div class="card w-75 " style="top:20%; height:60%">
            <img src="{{ asset('img/smk.png') }}" class="mx-auto" style="
            width: 25%;
            position: relative;
            top: -10%;
            filter: drop-shadow(4px 4px 0 white)        drop-shadow(-3px 3px 0 white)        drop-shadow(3px -6px 0 white)        drop-shadow(-4px -2px 0 white);
        " alt="">
            <h1 class="card-title" style="color: #1E1E1E; position: relative;top: -9%;">Buku Induk Siswa</h1>
            <div class="card-body">
                <form action="{{ route('login') }}" method="post" style="color: #1E1E1E; position: relative;top: -9%;">
                    @csrf
                    <div class="input-group mb-4 mx-auto" style="width:85%">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" placeholder="{{ __('Email') }}" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3 mx-auto" style="width:85%; height: 10%">
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="{{ __('Password') }}">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3 mx-auto" style="width:85%; height: 10%">
                    </div>

                    <div class="form-check mb-3 d-flex justify-content-start">
                        <div class="inputremember ms-3">
                            {{-- <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked'
                                : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label> --}}
                        </div>
                    </div>


                    <div class="buttonLogin mb-4 mx-auto" style="width: 85%">
                        <button type="submit" style="background-color: #1A365F; color: white" class="btn w-100">
                            <h4 class="m-0">{{ __('Login') }}</h4>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="col-6 bg2 p-0"><img style="width: 100%; height:100%" src="{{ asset('img/bg2.png') }}" alt=""></div>
</div>
@endsection