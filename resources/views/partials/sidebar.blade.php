<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand text-center">
            <img src="/img/logos/alfaristudio_white.png" height="25">
            <span class="align-middle">Alfari Studio</span>
        </a>

        <ul class="sidebar-nav">

            <li class="sidebar-header">
                Menu
            </li>

            <li class="sidebar-item {{ $title === 'Dashboard' ? 'active' : '' }}">
                <a class="sidebar-link" href="/">
                    <i class="bi bi-pie-chart align-middle"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>


            <li class="sidebar-item {{ $title === 'Barang' ? 'active' : '' }}">
                <a class="sidebar-link" href="/item">
                    <i class="bi bi-box align-middle"></i> <span class="align-middle">Barang</span>
                </a>
            </li>


            <li class="sidebar-item {{ $title === 'Pembelian' ? 'active' : '' }}">
                <a class="sidebar-link" href="/purchase">
                    <i class="bi bi-cart4 align-middle"></i> <span class="align-middle">Pembelian</span>
                </a>
            </li>

            <li class="sidebar-item {{ $title === 'Penjualan' ? 'active' : '' }}">
                <a class="sidebar-link" href="/sale">
                    <i class="bi bi-cash-coin align-middle"></i> <span class="align-middle">Penjualan</span>
                </a>
            </li>

            <li class="sidebar-item {{ $title === 'Kasir' ? 'active' : '' }}">
                <a class="sidebar-link" href="/cashier">
                    <i class="bi bi-calculator align-middle"></i> <span class="align-middle">Kasir</span>
                </a>
            </li>


        </ul>

    </div>
</nav>
