@extends('main')
@section('content')
<div class="card" style="width: 420px;">
    <div class="card-header">Edit Siswa</div>
    <div class="card-body">
        <form action="/siswa/{{ $siswa->id }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <input type="number" name="nisn" id="" class="form-control @error('nisn') is-invalid @enderror" placeholder="NISN..." value="{{ $siswa->nisn }}">
                @error('nisn')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" name="nama" id="" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama..." value=" {{ $siswa->nama }}">
                @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <select name="kelas" id="" class="form-control @error('jurusan') is-invalid @enderror">

                    <option value="" @selected($siswa->kelas == "") >Kelas</option>
                    <option value="10" @selected($siswa->kelas == 10) >10</option>
                    <option value="11" @selected($siswa->kelas == 11) >11</option>
                    <option value="12" @selected($siswa->kelas == 12) >12</option>
                </select>
                @error('kelas')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <select name="jurusan_id" id="" class="form-control @error('jurusan') is-invalid @enderror">
                    <option value="">Jurusan</option>
                    @foreach($jurusan as $jurusan)
                        <option value="{{ $jurusan->id }}" @selected($siswa->jurusan_id == $jurusan->id)>{{ $jurusan->nama_jurusan }}</option>
                    @endforeach
                </select>
                @error('jurusan')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <input type="date" name="tgl_lahir" id="" class="form-control @error('tgl_lahir') is-invalid @enderror" placeholder="tgl_lahir..." value="{{ $siswa->tgl_lahir }}">
                @error('tgl_lahir')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <textarea name="alamat" id="" rows="10" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat">{{ $siswa->alamat }}</textarea>
                @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" class="btn btn-success w-100 mb-2" value="Tambahkan">
            <a href="/siswa" class="btn btn-secondary w-100">Batal</a>
        </form>
    </div>
</div>
@endsection