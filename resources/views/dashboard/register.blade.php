@extends('dashboard.layout.master')

@section('dahboard.tamu')
    <div class="container hero-daftar">
        <div class="row w-100 d-flex justify-content-center">
            <div class="col-lg-8 col-sm-12">
                <div class="card w-100 bg-dark text-light">
                    <div class="card-body">
                        <h4 class="text-center">FORM PENDAFTARAN SISWA BARU SMK WIKRAMA BOGOR</h4>
                        <h5 class="text-center">TP 2024-2025</h5>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('dashboard.register.store') }}" method="POST" class="mt-3 form-group">
                            @csrf
                            <div class="row">
                                <div class="mt-3 col-6">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="number" name="nisn" id="nisn" class="form-control" placeholder="Masukkan nisn anda">
                                </div>
                                <div class="mt-3 col-6">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        {{-- <option>Pilih ...</option> --}}
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mt-3 col-12">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" id="nama" class="form-control"
                                        placeholder="Masukkan nama lengkap anda">
                                </div>
                                <div class="mt-3 col-12">
                                    <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                    <select onchange="ceksekolah()" name="asal_sekolah" id="asal_sekolah"
                                        class="form-control">
                                        <option selected hidden>Pilih asal sekolah ..</option>
                                        <option value="lainnya">Lainnya</option>
                                        @foreach ($schools as $s)
                                            <option value="{{ $s['nama_sekolah'] }}">{{ $s['nama_sekolah'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-3 col-12 nama_sekolah d-none">
                                    <label for="nama_sekolah_input" class="form-label">Nama Sekolah</label>
                                    <input type="text" name="asal_sekolah" id="nama_sekolah_input" class="form-control"
                                        placeholder="Masukkan asal smp">
                                </div>
                                <div class="mt-3 col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email anda">
                                </div>
                                <div class="mt-3 col-12">
                                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                                    <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan nomor hp anda">
                                </div>
                                <div class="mt-3 col-6">
                                    <label for="no_hp_ayah" class="form-label">Nomor Handphone Ayah</label>
                                    <input type="text" name="no_hp_ayah" id="no_hp_ayah" class="form-control"
                                        placeholder="Masukkan nomor hp Ayah">
                                </div>
                                <div class="mt-3 col-6">
                                    <label for="no_hp_ibu" class="form-label">Nomor Handphone Ibu</label>
                                    <input type="text" name="no_hp_ibu" id="no_hp_ibu" class="form-control"
                                        placeholder="Masukkan nomor ho Ibu">
                                </div>
                                <div class="mt-3 col-12">
                                    <label>Pilih Referensi</label>
                                    <select name="referensi" class="form-control" id="pilih_referensi"
                                        onclick="tampil_referensi()" required>
                                        {{-- <option disabled hidden selected>Pilih Referensi</option> --}}
                                        <option value="pegawai">Guru/Staf/Laboran/Pegawai Wikrama</option>
                                        <option value="siswa">Siswa SMK Wikrama</option>
                                        <option value="alumni">Alumni SMK Wikrama</option>
                                        <option value="guru_smp">Guru SMP</option>
                                        <option value="calon_siswa">Calon Siswa SMK Wikrama</option>
                                        <option value="sosial_media">Sosial Media</option>
                                        <option value="referensi_langsung">Referensi Langsung</option>
                                    </select>
                                </div>
                                <div class="mt-3 col-12 d-flex justify-content-end">
                                    <input type="submit" value="REGISTRASI" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
