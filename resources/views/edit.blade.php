@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Edit Mahasiswa</h1>
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{url('/update/' . $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Mahasiswa"
                            value="{{$data->nama}}">
                            @error('nama')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama">NIM</label>
                            <input type="text" name="nim" class="form-control" placeholder="Masukan NIM" 
                            value="{{$data->nim}}">
                            @error('nim')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama">Alamat</label>
                            <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Lengkap">{{$data->alamat}}</textarea>
                            @error('alamat')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection