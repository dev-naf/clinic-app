<nav id="sidebarMenu" class="col-md-3 mt-0 col-lg-2 col-xl-2 d-md-block  sidebar collapse sidebar-custom">
    <div class="position-sticky pt-2 sidebar-sticky ">
        <ul class="sidebar-nav" id="sidebar-nav">

            {{-- Dashboard Link --}}
            <li class="nav-item">
                <a class="nav-link collapsed"  href="/">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            {{-- Data Barang Link --}}
            <li class="nav-item">
                <a class="nav-link collapsed"  href="/barang">
                    <i class="bi bi-shop"></i><span>Data Barang</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <!--===== PASIEN =======-->
            {{-- Data Pasien Link --}}
            <li class="nav-item">
                <a class="nav-link collapsed"  href="/datapasien">
                    <i class="fa fa-address-card"></i><span>Data Pasien</span>
                </a>
            </li>
            {{-- Diagnosis Pasien Link --}}
            <li class="nav-item">
                <a class="nav-link collapsed"  href="/periksapasien">
                    <i class="fa fa-stethoscope"></i><span>Pemeriksaan Pasien</span>
                </a>
            </li>
            {{-- Riwayat Pemeriksaan Pasien Link --}}
            <li class="nav-item">
                <a class="nav-link collapsed"  href="/riwayatpasien">
                    <i class="bi bi-file-earmark-medical"></i><span>Riwayat Pemeriksaan Pasien</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <!--===== TRANSAKSI =====-->
            {{-- Pembayaran Tagihan Link --}}
            <li class="nav-item">
                <a class="nav-link collapsed"  href="/pembayaran">
                    <i class="bi bi-gem"></i><span>Pembayaran Tagihan</span>
                </a>
            </li>
            {{-- Pembelian Barang Link --}}
            <li class="nav-item">
                <a class="nav-link collapsed"  href="/pembelian">
                    {{-- <i class="bi bi-gem"></i>--}}<i class="fa-solid fa-cash-register"></i><span>Pembelian Barang</span>
                </a>
            </li>
            {{-- Laporan Transaksi Harian Link --}}
            <li class="nav-item">
                <a class="nav-link collapsed"  href="/laporanharian">
                    <i class="fa fa-file-invoice"></i><span>Laporan Transaksi Harian</span>
                </a>
            </li>
            {{-- Laporan Transaksi bulanan Link --}}
            <li class="nav-item">
                <a class="nav-link collapsed"  href="/laporanbulanan">
                    <i class="fa fa-file-invoice-dollar"></i><span>Laporan Transaksi Bulanan</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
            {{-- Log Out Link ? --}}
            <li class="nav-item">
                <a class="nav-link collapsed"  href="#">
            </li>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        </ul>
    </div>
</nav>
