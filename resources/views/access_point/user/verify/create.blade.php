<!doctype html>
<html lang="en">
    <head>
        @include('head_link')
        <title>Techno Indie - Verify</title>
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

        <!-- NAVBAR -->
        <nav class="site-nav">
            <div class="container">
                <div class="site-navigation">
                    <a href="index.html" class="logo m-0">Techno Indie <span class="text-primary">.</span></a>

                    {{-- <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/order_service') }}">Order Service</a></li>
                                <li><a href="{{ url('/my_order') }}">My Order</a></li>
                                <li class="active"><a href="{{ url('/coba_verify') }}">Coba Verify</a></li>
                            </ul> --}}

                    <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>

                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->

        <!-- CONTENT -->
        <div class="hero hero-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mx-auto text-center">
                        <div class="intro-wrap">
                            <h1 class="mb-0">Verify your order</h1>
                            <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="untree_co-section"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <form action="{{ route('verifikasi.store') }}" method="POST" class="contact-form" data-aos="fade-up" data-aos-delay="200">
                            @csrf
                            <div class="form-group">
                                <label class="text-black" for="transaction_id">Transaction ID</label>
                                <input type="text" class="form-control" id="transaction_id" name="transaction_id">
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="bank">Bank</label>
                                <select name="bank" id="select" class="custom-select">
                                    <option value="">-- Select --</option>
                                    <option value="Bank BCA">Bank BCA</option>
                                    <option value="Bank Mandiri">Bank Mandiri</option>
                                    <option value="Bank Neo">Bank Neo</option>
                                </select>
                            </div>
                            <input type="hidden" name="order_id" value="{{ $order_id }}">
                            <button type="submit" class="btn btn-primary">Verify</button>
                        </form>                        
                    </div>

                    <div class="col-lg-5 ml-auto">
                        <div class="quick-contact-item d-flex align-items-center mb-4">
                            <span class="flaticon-mail"></span>

                            <address class="text">
                                BCA     Bank : 1342647841<br>
                                Mandiri Bank : 1340027674489</br>
                                Neo     Bank : 5859459403097305
                            </address>
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
