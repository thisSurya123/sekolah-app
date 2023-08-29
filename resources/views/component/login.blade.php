@extends('main')
@section('content')
    <div class="card mx-auto mt-4" style="width: 420px">
        <div class="card-header">Login</div>
        <div class="card-body px-3 py-5">
            <form action="/login" method="post">
                @csrf
                <div class="mb-3">
                    <input type="text" name="email" id="" placeholder="Email..."  class="form-control @error('email') is-invalid @enderror ">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="password" name="password" id="" placeholder="Password..."  class="form-control @error('password') is-invalid @enderror ">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="Login" class="btn btn-success w-100">
            </form>
        </div>
    </div>
@endsection