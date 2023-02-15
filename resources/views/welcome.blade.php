@extends('layouts.default')

@section('content')
<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 70vw;">
        <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
            <span class="fs-5 fw-semibold">Welcome to MahaStudent, 
                @guest
                <span class="fs-5 fw-semibold">Guest</span>
                @else
                {{-- <span class="fs-5 fw-semibold">{{Auth::user()->name}}</span> --}}
                @endguest
            </span>
            <a href="{{url('/mahasiswa')}}" class="btn btn-success align-self-end">Mahasiswa List</a>
        </div>
</div>   
@endsection