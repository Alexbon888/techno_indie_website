<!doctype html>
<html lang="en">
    <head>
        @include('head_link')
        <title>Techno Indie - History</title>
    </head>

    <body>
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                    <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>

            <div class="site-mobile-menu-body"></div>
        </div>

        <nav class="site-nav">
            <div class="container">
                <div class="site-navigation">
                    <a href="{{ url('user') }}" class="logo m-0">Techno Indie <span class="text-primary">.</span></a>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                        <li><a href="{{ url('user') }}">Home</a></li>

                        {{-- <li class="has-children">
                            <a href="#">Dropdown</a>
                            <ul class="dropdown">
                                <li><a href="{{ url('/elements') }}">Order Service</a></li>
                                <li><a href="#">Menu One</a></li>
                                <li class="has-children">
                                    <a href="#">Menu Two</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Sub Menu One</a></li>
                                        <li><a href="#">Sub Menu Two</a></li>
                                        <li><a href="#">Sub Menu Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Menu Three</a></li>
                            </ul>
                        </li> --}}

                        <li><a href="{{ url('order') }}">Order Service</a></li>
                        <li class="active"><a href="{{ url('history') }}">My Order</a></li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                    </ul>

                    <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- CONTENT -->
        <div class="hero hero-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mx-auto text-center">
                        <div class="intro-wrap">
                            <h1 class="mb-0">My Order</h1>
                            <p class="text-white">The Star Has Guided you here to see everything you had made before.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="untree_co-section">
            <div class="container my-5">
                <div class="row justify-content-center mt-5 section">
                    <div class="col-md-12">
                        <div class="card card-outline-blue">
                            <div class="card-header">
                                <h4 class="card-title">History</h4>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>No.</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jasa Pemesanan</th>
                                            <th>Harga Jasa</th>
                                            <th>Metode Pengantaran</th>
                                            <th>Tanggal Proses</th>
                                            <th>Waktu Proses</th>
                                            <th>Waktu Pemesanan</th>
                                            <th>Waktu Pembaruan</th>
                                            <th>Status Validasi</th>
                                            {{-- <th>ID Transaksi</th>
                                            <th>Bank</th> --}}
                                            <th>Action</th>
                                        </thead>

                                        <tbody>
                                            @foreach ($pemesanans as $pemesanan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pemesanan->user->full_name }}</td>
                                                <td>{{ $pemesanan->service_name }}</td>
                                                <td>{{ $pemesanan->service_price }}</td>
                                                <td>{{ $pemesanan->delivery_method }}</td>
                                                <td>{{ $pemesanan->process_date }}</td>
                                                <td>{{ $pemesanan->session_time }}</td>
                                                <td>{{ $pemesanan->created_at }}</td>
                                                <td>{{ $pemesanan->updated_at }}</td>
                                                <td>{{ $pemesanan->status }}</td>
                                                {{-- <td>{{ $pemesanan->verifikasi ? $pemesanan->verifikasi->transaction_id : 'N/A' }}</td>
                                                <td>{{ $pemesanan->verifikasi ? $pemesanan->verifikasi->bank : 'N/A' }}</td> --}}
                                                <td>
                                                    @if ($pemesanan->verifikasi)
                                                        <button style="outline: whitesmoke" class="btn-custom-detail" onclick="window.location.href='{{ route('history.show', ['id' => $pemesanan->id]) }}'">Detail</button>
                                                    @else
                                                        <button style="outline: whitesmoke" class="btn-custom" onclick="window.location.href='{{ route('verify.create', ['order_id' => $pemesanan->id]) }}'">Verify</button>
                                                    @endif
                                                </td>
                                            </tr> 
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->

        <!-- FOOTER -->
        @include('footer')
        <!-- END FOOTER -->

        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <!-- BODY LINK -->
        @include('body_link')
        <!-- END BODY LINK -->
    </body>
</html>
