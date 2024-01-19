@foreach ($calon_siswas as $c)
    <div class="modal fade" id="detailSiswa{{ $c->id }}" tabindex="-1"
        aria-labelledby="detailSiswa{{ $c->id }}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailSiswa{{ $c->id }}Label">Detail Siswa</h5>
                    <button type="button" class="btn fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>{{ $c->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <td>Nisn</td>
                            <td>{{ $c->nisn }}</td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>{{ $c->asal_sekolah }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>{{ $c->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $c->email }}</td>
                        </tr>
                        <tr>
                            <td>Nomor Handphone</td>
                            <td>{{ $c->no_hp }}</td>
                        </tr>
                        <tr>
                            <td>Nomor Handphone Ayah</td>
                            <td>{{ $c->no_hp_ayah }}</td>
                        </tr>
                        <tr>
                            <td>Nomor Handphone</td>
                            <td>{{ $c->no_hp }}</td>
                        </tr>
                        <tr>
                            <td>Referensi</td>
                            <td>{{ $c->referensi }}</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@foreach ($calon_siswas as $c)
    <div class="modal fade" id="detailRegistrasi{{ $c->id }}" tabindex="-1"
        aria-labelledby="detailRegistrasi{{ $c->id }}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailRegistrasi{{ $c->id }}Label">Detail Siswa</h5>
                    <button type="button" class="btn fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($c->all_payment as $p)
                        <a href="#" class="card border text-decoration-none" data-bs-toggle="modal"
                            data-bs-target="#detailTransaksi{{ $p->id }}">
                            <div class="card-body">
                                <p>
                                    <span class="text-dark">
                                        Transaksi : {{ $p->payment_id }}
                                    </span>
                                    <br>
                                    <span class="text-dark">
                                        Status : @if (!$p->is_confirmed)
                                            Pembayaran belum dikonfirmasi
                                        @elseif ($p->is_confirmed == 'approve')
                                            Pembayaran Diterima
                                        @elseif ($p->is_confirmed == 'decline')
                                            Pembayaran Ditolak
                                        @endif
                                    </span>
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@foreach ($payments as $p)
    <div class="modal fade" id="detailTransaksi{{ $p->id }}" tabindex="-1"
        aria-labelledby="detailRegistrasi{{ $p->id }}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailRegistrasi{{ $p->id }}Label">Transaksi</h5>
                    <button type="button" class="btn fa-solid fa-xmark" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <td>ID Transaksi</td>
                            <td>{{ $p->payment_id }}</td>
                        </tr>
                        <tr>
                            <td>Nama Bank</td>
                            <td>{{ $p->bank }}</td>
                        </tr>
                        <tr>
                            <td>Nama Pemilik Rekening</td>
                            <td>{{ $p->nama_rekening }}</td>
                        </tr>
                    </table>
                    <div style="max-height: 300px; overflow-y:scroll;">
                        <img src="{{ asset('storage') }}/{{ $p->bukti_pembayaran }}" alt="" class="w-100">
                    </div>
                    @php
                        if ($p->is_confirmed) {
                            $disable = true;
                            $btn_success = 'btn-secondary';
                            $btn_danger = 'btn-secondary';
                        }else{
                            $disable = false;
                            $btn_success = 'btn-success';
                            $btn_danger = 'btn-danger';
                        }
                    @endphp
                    <table class="table">
                        <tr>
                            <td><a href="{{ route('admin.transaksi.approve', $p->payment_id) }}"
                                    class="btn {{ $btn_success }}" @if($disable == true) style="pointer-events: none" @endif >Terima Pembayaran</a></td>
                            <td><a href="{{ route('admin.transaksi.decline', $p->payment_id) }}"
                                    class="btn {{ $btn_danger }}"  @if($disable == true) style="pointer-events: none" @endif >Tolak Pembayaran</a></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
