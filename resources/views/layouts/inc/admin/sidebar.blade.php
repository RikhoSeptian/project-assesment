<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
          <i class="mdi mdi-speedometer menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#mahasiswa">
          <i class="mdi mdi-view-list menu-icon"></i>
          <span class="menu-title">Mahasiswa</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="mahasiswa">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/mahasiswa')}}">Add Mahasiswa</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/mahasiswa') }}">View Mahasiswa</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#prodi">
          <i class="mdi mdi-view-list menu-icon"></i>
          <span class="menu-title">Prodi</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="prodi">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/prodi')}}">Add Prodi</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/prodi') }}">View Prodi</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#dosen">
          <i class="mdi mdi-view-list menu-icon"></i>
          <span class="menu-title">Dosen</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="dosen">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/dosen')}}">Add Dosen</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/dosen') }}">View Dosen</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#matkul">
          <i class="mdi mdi-view-list menu-icon"></i>
          <span class="menu-title">Mata Kuliah</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="matkul">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/matkul')}}">Add Mata Kuliah</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/matkul') }}">View Mata Kuliah</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
          <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          <span class="menu-title">Users</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="users">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/users') }}"> Add User </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('admin/users') }}"> View Users </a></li>
          </ul>
        </div>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
          <i class="mdi mdi-emoticon menu-icon"></i>
          <span class="menu-title">Icons</span>
        </a>
      </li> --}}
      
    </ul>
  </nav>