@extends('main')
@section('content')
            <div class="card" style="width: 480px;">
                <div class="card-header">Tambahkan Siswa</div>
                <div class="card-body">
                    <form action="/siswa" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="number" name="nisn" id="" class="form-control @error('nisn') is-invalid @enderror" placeholder="NISN...">
                            @error('nisn')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" name="nama" id="" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama...">
                            @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select name="kelas" id="" class="form-control @error('jurusan') is-invalid @enderror">
                                <option value="">Kelas</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            @error('kelas')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select name="jurusan_id" id="" class="form-control @error('jurusan') is-invalid @enderror">
                                <option value="">Jurusan</option>
                                @foreach($jurusan as $jurusan)
                                    <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                                @endforeach
                            </select>
                            @error('jurusan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="date" name="tgl_lahir" id="" class="form-control @error('tgl_lahir') is-invalid @enderror" placeholder="tgl_lahir...">
                            @error('tgl_lahir')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <textarea name="alamat" id="" rows="10" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat"></textarea>
                            @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-success w-100" value="Tambahkan">
                    </form>
                </div>
            </div>
@endsection