@extends('layouts.default')


@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Data Mahasiswa</h1>
                <h5>Total Mahasiswa : {{$mahasiswa}}</h5>
                <a href="{{ url('/create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
            </div>

            <div class="mt-5">
                <table class="table table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $dataM)
                    <tr>
                        <td>{{$dataM->nama}}</td>
                        <td>{{$dataM->nim}}</td>
                        <td>{{$dataM->alamat}}</td>
                        <td>
                            <a href="{{url ('/edit/'.$dataM->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{url ('/delete/'.$dataM->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>

@endsection