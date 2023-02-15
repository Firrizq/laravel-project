@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah Mahasiswa</h1>
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama">Nama Mahasiswa <span style="color: red;">*</span></label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Mahasiswa">
                            @error('nama')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama">NIM <span style="color: red;">*</span></label>
                            <input type="text" name="nim" class="form-control" placeholder="Masukan NIM">
                            @error('nim')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama">Alamat <span style="color: red;">*</span></label>
                            <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Lengkap"></textarea>
                            @error('alamat')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>

                        <div class="mb-3">
                            <a href="{{url('/mahasiswa')}}">
                                << Kembali ke halaman utama <<
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection