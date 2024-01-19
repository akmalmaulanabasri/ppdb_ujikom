@extends('dashboard.layout.master')

@section('dahboard.tamu')

    <div class="container hero-daftar">
        <div class="row w-100 d-flex justify-content-center">
            <div class="col-lg-8 col-sm-12">
                <div class="card w-100 bg-dark text-light">
                    <div class="card-body">
                        <h4 class="text-center">Login</h4>
                        <h5 class="text-center">PPDB TP 2024-2025</h5>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('login.auth') }}" method="POST" class="mt-3 form-group">
                            @csrf
                            <div class="row">
                                <div class="mt-3 col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Masukkan email ppdb terdaftar">
                                </div>
                                <div class="mt-3 col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input autocomplete="off" type="password" name="password" id="password"
                                        class="form-control" placeholder="Masukkan password anda">
                                </div>
                                <div class="mt-3 col-12 d-flex justify-content-end">
                                    <input type="submit" value="LOGIN" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('print'))
        <script>
            Swal.fire(
                'Sukses',
                'Silahkan login, akses akun tertera pada pdf yang di download otomatis',
                'success'
            )
        </script>
        @php
            $print = session('print');
        @endphp
        <script>
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const data = urlParams.get('nisn')
            window.location.href = '{{ route('dashboard.pdf.download', $print) }}';
        </script>
    @endif
@endsection
