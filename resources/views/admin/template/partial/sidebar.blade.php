<aside class="main-sidebar bg-success elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <span class="brand-text font-weight-light font-weight-bold">RS Permata Hati</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block text-light">Admin Rumah sakit</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


        <li class="nav-header">Main Navigation</li>
        <li class="nav-item">
          <a href="{{route('uang.index') }}" class="nav-link">
            <i class="fas fa-book text-light"></i>
            <p class="text-light">Tagihan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('pasien.index') }}" class="nav-link">
            <i class="fas fa-users text-light"></i>
            <p class="text-light">Data Pasien</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('pegawai.index') }}" class="nav-link">
            <i class="fas fa-user text-light"></i>
            <p class="text-light">Pegawai</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('lab.index') }}" class="nav-link">
            <span class="text-light">
              <i class="fas fa-book "></i>
              <p class="text-light">laboratory</p>
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('kamar.index') }}" class="nav-link">
            <span class="text-light">
              <i class="fas fa-hospital "></i>
              <p class="text-light">Kamar</p>
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('dokter.index') }}" class="nav-link">
            <span class="text-light">
              <i class="fas fa-user-md "></i>
              <p class="text-light">Dokter</p>
            </span>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>