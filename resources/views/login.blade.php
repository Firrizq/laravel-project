@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="card mx-auto mt-5 w-50">
                <div class="card-body">
                    <h1>Login</h1>
                    <form action="{{route('login')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email Pengguna">
                            @error('email')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan Password Pengguna">
                            @error('password')
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