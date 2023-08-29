@extends('main')
@section('content')

    <div class="row">
        <div class="col-sm-3">
            @include('sidebars.index')
        </div>
        <div class="col-sm-9 border pt-5">
            <div class="d-flex justify-content-center">
                @yield('dashboard-content')
            </div>
        </div>
    </div>

@endsection