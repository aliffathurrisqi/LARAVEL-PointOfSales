<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand text-center" href="/">
            <img src="/img/logos/alfari_brand_stroke.png" width="80%">
            {{-- <span class="align-middle">Alfari Studio</span> --}}
        </a>

        <ul class="sidebar-nav">

            <li class="sidebar-header">
                Menu
            </li>

            <li class="sidebar-item {{ $active === 'Dashboard' ? 'active' : '' }}">
                <a class="sidebar-link" href="/">
                    <i class="bi bi-pie-chart align-middle"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>


            <li class="sidebar-item {{ $active === 'Barang' ? 'active' : '' }}">
                <a class="sidebar-link" href="/item">
                    <i class="bi bi-box align-middle"></i> <span class="align-middle">Barang</span>
                </a>
            </li>

            <li class="sidebar-item {{ $active === 'Penjualan' ? 'active' : '' }}">
                <a class="sidebar-link" href="/sale">
                    <i class="bi bi-cash-coin align-middle"></i> <span class="align-middle">Penjualan</span>
                </a>
            </li>

            <li class="sidebar-item {{ $active === 'Kasir' ? 'active' : '' }}">
                <a class="sidebar-link" href="/cashier">
                    <i class="bi bi-calculator align-middle"></i> <span class="align-middle">Kasir</span>
                </a>
            </li>


        </ul>

    </div>
</nav>
