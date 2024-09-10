<ul class="nav">
    <!-- Menu -->
    <li class="{{ request()->is('admin') ? 'active' : '' }}">
        <a href="{{ url('admin') }}">
            <i class="nc-icon nc-tap-01"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="{{ request()->is('daftar_pemesanan') ? 'active' : '' }}">
        <a href="{{ url('daftar_pemesanan') }}">
            <i class="nc-icon nc-bullet-list-67"></i>
            <p>Validasi Pemesanan</p>
        </a>
    </li>
    <li class="{{ request()->is('tahap_pengerjaan') ? 'active' : '' }}">
        <a href="{{ url('tahap_pengerjaan') }}">
            <i class="nc-icon nc-paper"></i>
            <p>Tahap Pengerjaan</p>
        </a>
    </li>
    <li class="{{ request()->is('pemesanan_selesai') ? 'active' : '' }}">
        <a href="{{ url('pemesanan_selesai') }}">
            <i class="nc-icon nc-single-copy-04"></i>
            <p>Pemesanan Selesai</p>
        </a>
    </li>
    <li class="{{ request()->is('riwayat_pemesanan') ? 'active' : '' }}">
        <a href="{{ url('riwayat_pemesanan') }}">
            <i class="nc-icon nc-tile-56"></i>
            <p>Riwayat Pemesanan</p>
        </a>
    </li>
</ul>
