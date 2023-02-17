@extends('layouts.default')


@section('content')


<section>
    @guest
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Data Mahasiswa</h1>
                <h5>Total Mahasiswa : {{$mahasiswa}}</h5>
            </div>

            <div class="mt-5">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Alamat</th>
                    </tr>
                    @foreach ($data as $dataM)
                    <tr>
                        <td>{{$dataM->nama}}</td>
                        <td>{{$dataM->nim}}</td>
                        <td>{{$dataM->alamat}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @else
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Data Mahasiswa</h1>
                <h5>Total Mahasiswa : {{$mahasiswa}}</h5>
                @if (Auth::user()->role == 'admin')
                <a href="{{ url('/create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
                @endif
            </div>
            <div class="mt-5">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Alamat</th>
                        @if (Auth::user()->role == 'admin')
                        <th>Action</th>
                        @endif
                    </tr>
                    @foreach ($data as $dataM)
                    <tr>
                        <td>{{$dataM->nama}}</td>
                        <td>{{$dataM->nim}}</td>
                        <td>{{$dataM->alamat}}</td>
                        @if (Auth::user()->role == 'admin')
                        <td>
                            <a href="{{url ('/edit/'.$dataM->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{url ('/delete/'.$dataM->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endguest
</section>

@endsection