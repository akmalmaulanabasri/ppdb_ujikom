@extends('calon_siswa.layout.master')

@section('calon_siswa.dashboard')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h3>Hello, {{ Auth::user()->calon_siswa->nama_lengkap }}</h3>
                    @if (Auth::user()->calon_siswa->status_pembayaran)
                    @else
                        <h4 class="">Silahkan Melakukan Pembayaran Registrasi PPDB !</h4>
                    @endif
                </div>
            </div>
        </section>
        <section class="mt-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="pb-3">Data calon peserta didik</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->calon_siswa->nama_lengkap }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->calon_siswa->jenis_kelamin }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Asal Sekolah</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->calon_siswa->asal_sekolah }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->calon_siswa->email }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No HP</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->calon_siswa->no_hp }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No HP Ayah</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->calon_siswa->no_hp_ayah }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No HP Ibu</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->calon_siswa->no_hp_ibu }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Referensi</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->calon_siswa->referensi }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
