<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php?hal=home" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="photo1.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">saya</a>
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
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="index.php" class="nav-link <?php if (empty($_REQUEST['hal'])) {
                                                echo "active";
                                              } ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="index.php?hal=pesanan" class="nav-link <?php if (isset($_REQUEST['hal'])) {
                                                            if ($_REQUEST['hal'] == "pesanan") {
                                                              echo "active";
                                                            }
                                                          } ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Pesanan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?hal=vendor" class="nav-link <?php if (isset($_REQUEST['hal'])) {
                                                            if ($_REQUEST['hal'] == "vendor") {
                                                              echo "active";
                                                            }
                                                          } ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Vendor</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?hal=kartu" class="nav-link <?php if (isset($_REQUEST['hal'])) {
                                                          if ($_REQUEST['hal'] == "kartu") {
                                                            echo "active";
                                                          }
                                                        } ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Kartu</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?hal=pembelian" class="nav-link <?php if (isset($_REQUEST['hal'])) {
                                                              if ($_REQUEST['hal'] == "pembelian") {
                                                                echo "active";
                                                              }
                                                            } ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Pembelian</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?hal=pembayaran" class="nav-link <?php if (isset($_REQUEST['hal'])) {
                                                                if ($_REQUEST['hal'] == "pembayaran") {
                                                                  echo "active";
                                                                }
                                                              } ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Pembayaran</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?hal=jenis_produk" class="nav-link <?php if (isset($_REQUEST['hal'])) {
                                                                  if ($_REQUEST['hal'] == "jenis_produk") {
                                                                    echo "active";
                                                                  }
                                                                } ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Jenis produk</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?hal=produk" class="nav-link <?php if (isset($_REQUEST['hal'])) {
                                                                  if ($_REQUEST['hal'] == "produk") {
                                                                    echo "active";
                                                                  }
                                                                } ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Produk</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php" class="nav-link">
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
    
</aside>