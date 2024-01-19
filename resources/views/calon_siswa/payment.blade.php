{{-- @dd(Auth::user()->calon_siswa->payment) --}}
@extends('calon_siswa.layout.master')

@section('calon_siswa.dashboard')
    <div class="main-content">
        <section class="section">
            @if (Auth::user()->calon_siswa->payment)
                @if (Auth::user()->calon_siswa->payment->is_confirmed == 'approve')
                    <div class="card mt-3 bg-success">
                        <div class="card-body">
                            <h4>Pembayaran anda sudah di konfirmasi, silahkan tunggu informasi selanjutnya</h4>
                        </div>
                    </div>
                @endif
                @if (Auth::user()->calon_siswa->payment->is_confirmed == 'decline')
                    <div class="card mt-3 bg-danger">
                        <div class="card-body">
                            <h4>Pembayaran anda di tolak, mohon upload bukti pembayaran yang sah</h4>
                        </div>
                    </div>
                @endif
            @endif
            @if (Auth::user()->calon_siswa->payment == false or Auth::user()->calon_siswa->payment->is_confirmed == 'decline')
                <div class="card">
                    <div class="card-body">
                        <h3>Form Pembayaran</h3>
                        <form action="{{ route('calon_siswa.payment.upload') }}" method="post" class="form-group"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label for="bank" class="form-label">Nama Bank</label>
                                    <select onselect="changeBank()" name="bank" id="bank" class="form-control">
                                        <option>BCA</option>
                                        <option>BRI</option>
                                        <option>DANA</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="nama_rekening" class="form-label">Nama Pemilik Rekening</label>
                                    <input type="text" name="nama_rekening" id="nama_rekening" class="form-control">
                                </div>

                                <div class="col-12 mt-2">
                                    <span class="text-danger">*Silahkan lakukan transfer ke bank <span
                                            id="bank_name">Mandiri</span> <span id="rekening">10218992219</span> a/n SMK
                                        Wikrama Bogor Sejumlah Rp200.000</span>
                                </div>

                                <div class="col-12 mt-3">
                                    <label for="bukti_pembayaran" class="form-label">Upload Bukti Pembayaran</label>
                                    <input type="file" name="bukti_pembayaran" id="bukti_pembayaran"
                                        class="form-control">
                                </div>

                                <div class="col-12 mt-3 d-flex justify-content-center">
                                    <input type="submit" value="Submit" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
            @if (Auth::user()->calon_siswa->payment)
                @if (!Auth::user()->calon_siswa->payment->is_confirmed)
                    <div class="card">
                        <div class="card-body">
                            <h3>Terimakasih, anda sudah melakukan pembayaran</h3>
                            <p>Mohon tunggu konfirmasi pembayaran dari admin</p>
                        </div>
                    </div>
                @endif

                <div class="card mt-3">
                    <div class="card-body ">
                        <h3>Riwayat Pembayaran Anda</h3>
                        <div class="table-responsive">
                            <table class="table border">
                                <tr>
                                    <td>Tanggal Pembayaran</td>
                                    <td>Metode Transaksi</td>
                                    <td>Nama Rekening</td>
                                    <td>Status</td>
                                    <td>Nominal</td>
                                    <td>
                                        Aksi
                                    </td>
                                </tr>
                                @foreach ($has_payment as $has_payment)
                                    <tr>
                                        <td>{{ $has_payment->created_at }}</td>
                                        <td>{{ $has_payment->bank }}</td>
                                        <td>{{ $has_payment->nama_rekening }}</td>
                                        <td>
                                            @if (!$has_payment->is_confirmed)
                                                Pembayaran belum dikonfirmasi
                                            @elseif ($has_payment->is_confirmed == 'approve')
                                                Pembayaran Diterima
                                            @elseif ($has_payment->is_confirmed == 'decline')
                                                Pembayaran Ditolak
                                            @endif
                                        </td>
                                        <td>Rp200.000</td>
                                        <td>
                                            <button class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Lihat
                                                bukti Transfer</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('storage') }}/{{ Auth::user()->calon_siswa->payment->bukti_pembayaran }}"
                        alt="" class="w-100">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endif
    <script>
        $('#bank').on('change', function() {
            $('#bank_name').text(this.value);
            $('#rekening').text(Math.floor(Math.random() * 99999999999) + 10000000000);
        });
    </script>
@endsection
