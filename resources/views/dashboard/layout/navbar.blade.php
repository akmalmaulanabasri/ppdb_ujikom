<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-4 transparent">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
            <img src="{{ asset('asset') }}/img/gedung.png" alt="" class="logo_nav me-3 d-none d-lg-block">
            <span class="">PPDB SMK WIKRAMA BOGOR</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link mx-2" href="{{ route('dashboard') }}">Beranda</a>
                <a class="nav-link mx-2" href="#jurusan">Jurusan</a>
                <a class="nav-link mx-2" href="#tentang">Tentang Kami</a>
                <a class="nav-link mx-2" href="#contact-us">Hubungi Kami</a>
                @guest
                    <a class="nav-link mx-2" href="/login">Login</a>
                @endguest
                @auth
                    <a class="nav-link mx-2" href="@if(Auth::user()->role == "admin") {{ route("admin.dashboard") }} @else {{ route('calon_siswa.dashboard') }} @endif">@if(Auth::user()->role == "admin") Admin @else Dashboard @endif</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
