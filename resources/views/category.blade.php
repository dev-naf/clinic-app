<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dahboard</title>

    <link rel="stylesheet" href="css/dashboard.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  {{-- FontAwesome Icon --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  {{-- Bootstrap Icon --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
</head>
<body>

  <header id="header" class="header fixed-top d-flex align-items-center">

  {{-- Logo Assalisa --}}
  <div class="d-flex align-items-center justify-content-between">
    <a href="welcome.blade.php" class="logo d-flex align-items-center">
      <span class="d-none d-lg-block"> Assalisa Beauty Clinic</span>
    </a>
    
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>

  {{-- Search Bar --}}
  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="fa-regular fa-magnifying-glass"></i></button>
    </form>
  </div>

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      {{-- Search Icon --}}
      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="fa-regular fa-magnifying-glass"></i>
        </a>
      </li>

      {{-- Profil --}}
      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          {{-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
          <span class="d-none d-md-block dropdown-toggle ps-2">Emma Watson</span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>Emma Watson</h6>
            <span>Owner</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-gear"></i>
              <span>Account Settings</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul>
      </li>

    </ul>
  </nav>

  {{-- SIDEBAR --}}
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <p></p>
      <li>
        <hr class="dropdown-divider">
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="index.html">
          <i class="fa-solid fa-house"></i>
          <span>Dashboard</span>
        </a>
      </li>

      {{-- Data Barang --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Data Barang</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>

      <li>
        <hr class="dropdown-divider">
      </li>

      <!--===== PASIEN =======-->
      {{-- Data Pasien --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Data Pasien</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>

      {{-- Diagnosis Pasien --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Pemeriksaan Pasien</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>

      {{-- Riwayat Pemeriksaan Pasien --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Riwayat Pemeriksaan Pasien</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>

      <li>
        <hr class="dropdown-divider">
      </li>

      <!--===== TRANSAKSI =====-->
      {{-- Pembayaran Tagihan --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Pembayaran Tagihan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>

      {{-- Pembelian Barang --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Pembelian Barang</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>

      {{-- Laporan Transaksi Harian --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Laporan Transaksi Harian</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>

      {{-- Laporan Transaksi bulanan --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Laporan Transaksi Bulanan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>

      <li>
        <hr class="dropdown-divider">
      </li>

      {{-- Log Out --}}
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="icons-nav" data-bs-toggle="collapse" href="#">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>
</html>
