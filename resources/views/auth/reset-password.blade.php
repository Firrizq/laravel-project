@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5" style="width: 60%">
        <div class="card mx-auto mt-5 w-50">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('password.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{$request -> route('token')}}">

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" value="{{old('email')}}">
                        @error('email')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">New Password</label>
                        <input name="password" type="password" class="form-control" value="{{old('password')}}">
                        @error('password')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Confirm New Password</label>
                        <input name="password_confirmation" type="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
