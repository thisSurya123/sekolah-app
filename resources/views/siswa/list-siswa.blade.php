@extends('main')
@section('content')
        @if(isset($siswa))
        <div class="wrap">
            <ul class="list-group" style="width: 720px;">
                @foreach($siswa as $siswa)
                <li class="list-group-item d-flex justify-content-between">
                    {{ $siswa->nama }}
                    <div class="d-flex">
                        <a href="/siswa/{{ $siswa->id }}" class="btn btn-primary">Detail</a>
                        <a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-success">Edit</a>
                        <form action="/siswa/{{ $siswa->id }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Hapus {{ $siswa->nama }}')">
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
            @else
                <h2 class="text-center">Data siswa tidak ditemukan</h2>
            @endif
    
            <div class="d-flex justify-content-center my-2">
                <nav>
                    <ul class="pagination">
                        
                        <li class="page-item">
                            <a href="?page=" class="page-link">kembali<a>
                        </li>
                        @for($i = 1; $i <= 2; $i++)
                            <li class="page-item">
                                <a href="?page={{ $i }}" class="page-link {{ Request::input('page') == $i  ? 'active' : '' }}">{{ $i }}</a> 
                            </li> 
                        @endfor
                        <li class="page-item">
                        <a class="page-link" href="?page=">Next</a>
                        </li>
                    </ul>
                </nav>
        </div>
        </div>
@endsection