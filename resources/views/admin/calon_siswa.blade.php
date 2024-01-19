@extends('admin.layout.master')

@section('admin.dashboard')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h3>Hello, Admin</h3>
                    <div class="table-responsive">
                        <table class="table mt-2">
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Detail Pembayaran</th>
                            </tr>
                            @foreach ($calon_siswas as $c)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $c->nama_lengkap }}
                                        <a href="#" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detailSiswa{{ $c->id }}">Detail</a>
                                    </td>
                                    <td>
                                        @if ($c->payment)
                                            @if (!$c->payment->is_confirmed)
                                                Pembayaran belum dikonfirmasi
                                            @elseif ($c->payment->is_confirmed == 'approve')
                                                Pembayaran Diterima
                                            @elseif ($c->payment->is_confirmed == 'decline')
                                                Pembayaran Ditolak
                                            @endif
                                            <a href="#" type="button" data-bs-toggle="modal"
                                                data-bs-target="#detailRegistrasi{{ $c->id }}">Detail</a>
                                        @else
                                            Belum Dibayar
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('admin.components.modals')
@endsection
