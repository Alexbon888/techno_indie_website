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

        <div class="untree_co-section">
            <div class="container my-5">
                <div class="row justify-content-center mt-5 section">
                    <div class="col-md-7">
                        <div class="card card-outline-blue">
                            <div class="card-header">
                                <h4 class="card-title">Detail Pemesanan ID: {{ $pemesanan->id }}</h4>
                            </div>

                            <div class="card-body">
                                <div class="contact-form" data-aos="fade-up" data-aos-delay="100">
                                    <div class="form-group">
                                        <label class="text-black" for="service_name">Nama Jasa</label>
                                        <input type="text" class="form-control" id="service_name" value="{{ $pemesanan->service_name }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="service_price">Harga Jasa</label>
                                        <input type="text" class="form-control" id="service_price" value="{{ $pemesanan->service_price }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="delivery_method">Metode Pengantaran</label>
                                        <input type="text" class="form-control" id="delivery_method" value="{{ $pemesanan->delivery_method }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="process_date">Waktu Proses</label>
                                        <input type="date" class="form-control" id="process_date" value="{{ $pemesanan->process_date }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="session_time">Sesi</label>
                                        <input type="text" class="form-control" id="session_time" value="{{ $pemesanan->session_time }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="full_name">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="full_name" value="{{ $pemesanan->user->full_name }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="phone_number">Nomor Telp.</label>
                                        <input type="text" class="form-control" id="phone_number" value="{{ $pemesanan->phone_number }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="email">E-mail</label>
                                        <input type="text" class="form-control" id="email" value="{{ $pemesanan->email }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="address">Alamat</label>
                                        <input type="text" class="form-control" id="address" value="{{ $pemesanan->address }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="city">Kota</label>
                                        <input type="text" class="form-control" id="city" value="{{ $pemesanan->city }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="postal_code">Kode Pos</label>
                                        <input type="text" class="form-control" id="postal_code" value="{{ $pemesanan->postal_code }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="status">Status Pemesanan</label>
                                        <input type="text" class="form-control" id="status" value="{{ $pemesanan->status }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="transaction_id">Transaction ID</label>
                                        <input type="text" class="form-control" id="transaction_id" value="{{ $pemesanan->verifikasi->transaction_id }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black" for="bank">Bank</label>
                                        <input type="text" class="form-control" id="bank" value="{{ $pemesanan->verifikasi->bank }}" readonly>
                                    </div>
                                    <a href="{{ route('history.index') }}" class="btn btn-primary">Back to History</a>
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
