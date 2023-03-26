<?php
// user 3
// dosen 2
// admin 1




echo "<nav class='sidebar sidebar-offcanvas' id='sidebar'>
  <ul class='nav'>
    <li class='nav-item'>
      <a class='nav-link' href='../dashboard/index.php'>
        <i class='mdi mdi-grid-large menu-icon'></i>
        <span class='menu-title'>Dashboard</span>
      </a>
    </li>";
    if ($sessionlevel == 1 or $sessionlevel == 2) {
  echo "
    <li class='nav-item'>
      <a class='nav-link' data-bs-toggle='collapse' href='#data-master' aria-expanded='false' aria-controls='data-master'>
        <i class='menu-icon mdi mdi-database'></i>
        <span class='menu-title'>Data Master</span>
        <i class='menu-arrow'></i> 
      </a>
      <div class='collapse' id='data-master'>
        <ul class='nav flex-column sub-menu'>";
        echo"
          <li class='nav-item'> <a class='nav-link' href='../anggota/index.php'>Anggota</a></li>";
          if ($sessionlevel == 1) {
          echo "
          <li class='nav-item'> <a class='nav-link' href='../buku/index.php'>Buku</a></li>
          <li class='nav-item'> <a class='nav-link' href='../fakultas/index.php'>Fakultas & Jurusan</a></li>";}
          echo"
        </ul>
      </div>
    </li>";
    };
if ($sessionlevel == 1 or $sessionlevel == 4) {
echo "
    <li class='nav-item'>
      <a class='nav-link' href='../absensi/index.php'>
        <i class='mdi mdi-grid-large menu-icon'></i>
        <span class='menu-title'>Absensi</span>
      </a>
    </li>";
echo  "
    <li class='nav-item'>
      <a class='nav-link' href='../pengguna_baru/index.php'>
        <i class='mdi mdi-grid-large menu-icon'></i>
        <span class='menu-title'>Pengguna Baru</span>
      </a>
    </li> ";
}
echo  "  
    <li class='nav-item'>
      <a class='nav-link' href='../pinjam/index.php'>
        <i class='mdi mdi-grid-large menu-icon'></i>
        <span class='menu-title'>Pinjam Buku</span>
      </a>
    </li>";
echo "
    <li class='nav-item'>
      <a class='nav-link' href='../denda/index.php'>
        <i class='mdi mdi-grid-large menu-icon'></i>
        <span class='menu-title'>Denda</span>
      </a>
    </li>";

    if ($sessionlevel == 3) {
  echo "
    <!-- User -->
    <li class='nav-item'>
      <a class='nav-link' href='../skbp/index.php'>
        <i class='mdi mdi-grid-large menu-icon'></i>
        <span class='menu-title'>SKBP</span>
      </a>
    </li>";
    }

    if ($sessionlevel == 1 or $sessionlevel == 4) {
  echo "   <!-- admin -->
    <li class='nav-item'>
      <a class='nav-link' data-bs-toggle='collapse' href='#data-skbp' aria-expanded='false' aria-controls='data-skbp'>
        <i class='menu-icon mdi mdi-database'></i>
        <span class='menu-title'>SKBP</span>
        <i class='menu-arrow'></i> 
      </a>
      <div class='collapse' id='data-skbp'>
        <ul class='nav flex-column sub-menu'>
          <li class='nav-item'> <a class='nav-link' href='../skbp1/index.php'>SKBP 1</a></li>
          <li class='nav-item'> <a class='nav-link' href='../skbp2/index.php'>SKBP 2</a></li>
        </ul>
      </div>
    </li>";
    }

    echo "
  </ul>
</nav>";






?>