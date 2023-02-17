@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="card mx-auto mt-5 w-50">
                <div class="card-body">
                    <h1>Register Your Account</h1>
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Username</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Pengguna">
                            @error('name')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email Pengguna">
                            @error('email')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan Password Pengguna">
                            @error('password')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Confirm Password</label>
                            <input name="password_confirmation" type="password" class="form-control" placeholder="Konfirmasi Password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>

                        <div class="mb-3">
                            <a href="{{url('/login')}}">
                                Sudah Punya Akun?
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection