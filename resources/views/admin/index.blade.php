@extends('admin.layout.master')

@section('admin.dashboard')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h3>Hello, Admin</h3>
                    {{-- <h4>Ada {{ count($payments) }} Pembayaran Belum Dikonfirmasi</h4> --}}
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <a class="card py-3 shadow">
                        <div class="card-body">
                            <h4 class="text-center text-dark text-decoration-none">Total Pendaftar</h4>
                            <h5 class="text-center text-dark text-decoration-none">{{ count($students) }}</h5>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a class="card py-3 shadow">
                        <div class="card-body">
                            <h4 class="text-center text-dark text-decoration-none">Transaksi belum dikonfirmasi</h4>
                            <h5 class="text-center text-dark text-decoration-none">{{ count($payments) }}</h5>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a class="card py-3 shadow">
                        <div class="card-body">
                            <h4 class="text-center text-dark text-decoration-none">Transaksi terkonfirmasi</h4>
                            <h5 class="text-center text-dark text-decoration-none">{{ count($payment_approved) }}</h5>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a class="card py-3 shadow">
                        <div class="card-body">
                            <h4 class="text-center text-dark text-decoration-none">Transaksi ditolak</h4>
                            <h5 class="text-center text-dark text-decoration-none">{{ count($payment_decline) }}</h5>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
