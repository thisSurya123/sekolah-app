<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height: 100vh;">
    <a href="/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">{{Auth::guard('siswa')->user()->nama}}</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/dashboard" class="nav-link text-white {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page">
          Profil
        </a>
      </li>
      <li class="nav-item">
        <a href="/dashboard/kelas" class="nav-link text-white {{ Request::is('dashboard/kelas') ? 'active' : '' }}" aria-current="page">
          Kelas
        </a>
      </li>
      <li>
        <a href="/home" class="nav-link text-white">
          Nilai
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          Peringkat
        </a>
      </li>
      <li>
        <a href="/logout" class="nav-link text-white">Logout</a>
      </li>
    </ul>
  </div>