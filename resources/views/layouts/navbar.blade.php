<nav class="main-header navbar navbar-expand navbar-primary-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <a style="text-decoration:none;" href="{{ route('profile') }}">
        <li class="nav-item d-none d-sm-inline-block" style="width: 154px">
            <div class="row ml-auto">
                <div class="col-6 p-0 mr-2" style="width: fit-content;">
                    <h5 class="p-0 mb-0 mt-1 text-primary" style="text-align: end; height: fit-content;">{{ ucfirst(Auth::user()->name) }}</h5>
                    @if(Auth::user()->roles == 'admin')
                    <a href="{{ route('profile') }}" class="nav-link p-0" style="text-align: end; height: fit-content;">Super Admin</a>
                    @else
                    <a href="{{ route('profile') }}" class="nav-link p-0" style="text-align: end; height: fit-content;">{{ ucfirst(Auth::user()->roles) }}</a>
                    @endif
                </div>
                <div class="col-6 pl-0"  style="width: 33%">
                    <img src="{{ asset('img/profiles') }}/{{ Auth::user()->photo }}" alt="{{ ucfirst(Auth::user()->name) }} profile pictures" style="width: 114%;border-radius: 57%;height: 100%; aspect-ratio:1/1;object-fit: cover;">
                </div>
            </div>
        </li>
    </a>
    </ul>
  </nav>
  <!-- /.navbar -->