 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="indek.php" class="brand-link">
      <img src="dist/img/Gambar WhatsApp 2023-12-13 pukul 20.28.49_0e5f1c11.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Perpustakaan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/Gambar WhatsApp 2023-12-13 pukul 20.28.49_0e5f1c11.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="indek.php" class="d-block">
            <?php
            echo $_SESSION ['username'];
            ?>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="indek.php" class="nav-link">
              <i class="fas fa-chart-bar fa-lg"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link ">
            <i class="fas fa-book fa-lg" style="padding-left:2px;"></i>
              <p>
                Buku
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_buku.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_buku.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Buku</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="fas fa-shopping-cart fa-lg"></i>
              <p>
                Peminjaman
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_peminjaman.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pinjam Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kembalikan Buku </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_pinjam.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat </p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="fas fa-users fa-lg"></i>
              <p>
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_customer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_customer.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Customer</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="fas fa-user-cog fa-lg"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_admin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_admin.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Admin</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
    </div>

</aside>