
        <ul class="list-group w-50">
            <li class="list-group-item active">Data Siswa</li>
            <li class="list-group-item">NISN: {{ $siswa->nisn }}</li>
            <li class="list-group-item">Nama Lengkap: {{ $siswa->nama }}</li>
            <li class="list-group-item">Kelas: {{ $siswa->kelas }}</li>
            <li class="list-group-item">Jurusan: {{$siswa->jurusan->nama_jurusan }} </li>
            <li class="list-group-item">Tanggal Lahir: {{ $siswa->tgl_lahir }}</li>
            <li class="list-group-item">Alamat: {{ $siswa->alamat }}</li>
        </ul>