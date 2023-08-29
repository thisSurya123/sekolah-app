@extends('component.dashboard')
@section('dashboard-content')
    <ul class="list-group" style="width: 480px;">
        <li class="list-group-item active">{{ Auth::guard('siswa')->user()->jurusan->nama_jurusan}}</li>
        @foreach($kelas as $kelas)
        <li class="list-group-item">{{ $kelas->nama }}</li>
        @endforeach
    </ul>
@endsection