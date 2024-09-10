<!doctype html>
<html lang="en">
    <head>
        <!-- HEAD LINK -->
        @include('head_link')
        <!-- END HEAD LINK -->
        <title>Techno Indie - Home</title>
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

                    <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                        <li class="active"><a href="{{ url('user') }}">Home</a></li>
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
                        <li><a href="{{ url('history') }}">My Order</a></li>
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
        <!-- END NAVBAR -->

        <!-- CONTENT -->
        <div class="hero">
            <div class="container d-flex justify-content-center align-items-center min-vh-100">
                <div class="row align-items-center justify-content-center w-100">
                    <div class="col-lg-7 d-flex flex-column align-items-center">
                        <div class="intro-wrap">
                            <h1 class="mb-5"><span class="d-block">Pemesanan</span> Jasa <span class="typed-words"></span></h1>
                            <div class="row">
                                <div class="col-10">
                                    <div class="content" style="margin-top: 20px; padding-top: 10px;">
                                        <div id='calendar'></div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="eventDetailModal" tabindex="-1" aria-labelledby="eventDetailModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="eventDetailModalLabel">Event Details</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p id="eventTitle"></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script src="{{ asset('assets/calendar/js/jquery-3.3.1.min.js') }}"></script>
                                        <script src="{{ asset('assets/calendar/js/popper.min.js') }}"></script>
                                        <script src="{{ asset('assets/calendar/js/bootstrap.min.js') }}"></script>
                                        <script src="{{ asset('assets/calendar/fullcalendar/packages/core/main.js') }}"></script>
                                        <script src="{{ asset('assets/calendar/fullcalendar/packages/interaction/main.js') }}"></script>
                                        <script src="{{ asset('assets/calendar/fullcalendar/packages/daygrid/main.js') }}"></script>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                var calendarEl = document.getElementById('calendar');
                                                var calendar = new FullCalendar.Calendar(calendarEl, {
                                                    plugins: [ 'interaction', 'dayGrid' ],
                                                    initialView: 'dayGridMonth',
                                                    defaultDate: '{{ \Carbon\Carbon::now()->format("Y-m-d") }}',
                                                    editable: true,
                                                    eventLimit: true, 
                                                    events: function(fetchInfo, successCallback, failureCallback) {
                                                        $.ajax({
                                                            url: '{{ route('calendar.events') }}',
                                                            method: 'GET',
                                                            success: function(data) {
                                                                console.log('Events fetched successfully:', data);
                                                                successCallback(data);
                                                            },
                                                            error: function() {
                                                                failureCallback();
                                                                alert('There was an error while fetching events!');
                                                            }
                                                        });
                                                    },
                                                    eventClick: function(info) {
                                                        document.getElementById('eventTitle').innerText = info.event.title;
                                
                                                        $('#eventDetailModal').modal('show');
                                                    }
                                                });
                                                calendar.render();
                                                console.log('Calendar rendered');

                                                $('.modal').on('click', function (e) {
                                                    e.stopPropagation();
                                                });
                                            });
                                        </script>
                                        <script src="{{ asset('assets/calendar/js/main.js') }}"></script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="slides">
                            <img src="{{ asset('assets/images/header-1.png') }}" alt="Image" class="img-fluid active">
                            <img src="{{ asset('assets/images/header-2.png') }}" alt="Image" class="img-fluid">
                            <img src="{{ asset('assets/images/hero-slider-3.jpg') }}" alt="Image" class="img-fluid">
                            <img src="{{ asset('assets/images/hero-slider-4.jpg') }}" alt="Image" class="img-fluid">
                            <img src="{{ asset('assets/images/hero-slider-5.jpg') }}" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="untree_co-section">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <!-- SERVICE DESCRIPTIONS -->
                        <div class="custom-block" data-aos="fade-up">
                            <h2 class="section-title">Service Descriptions</h2>

                            <div class="custom-accordion" id="accordion_1">
                                <!-- DESCRIPTION 1 -->
                                <div class="accordion-item">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is Basic Cleaning ?</button>
                                    </h2>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                                        <div class="accordion-body">
                                            Basic Cleaning is a service that clean your PC to avoid dust damage your gear, basic cleaning your gear needs to be done periodically to maintain your gear health and cleanliness.
                                        </div>
                                    </div>
                                </div>
                                <!-- END DESCRIPTION 1 -->

                                <!-- DESCRIPTION 2 -->
                                <div class="accordion-item">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What is Deep Cleaning ?</button>
                                    </h2>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                                        <div class="accordion-body">
                                            Deep Cleaning is a service that combine Basic Cleaning plus changing your PC's thermal paste.
                                        </div>
                                    </div>
                                </div>
                                <!-- END DESCRIPTION 2 -->

                                <!-- DESCRIPTION 3 -->
                                <div class="accordion-item">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What is Peripheral Cleaning ?</button>
                                    </h2>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                                        <div class="accordion-body">
                                            Peripheral Cleaning is a service that clean your peripheral like KEYBOARD, MOUSE, MOUSEPAD, etc. to avoid dust damage your gear, basic cleaning your gear needs to be done periodically to maintain your gear health and cleanliness.
                                        </div>
                                    </div>
                                </div>
                                <!-- END DESCRIPTION 3 -->

                                <!-- DESCRIPTION 4 -->
                                <div class="accordion-item">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">What is PC Assembly ?</button>
                                    </h2>

                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion_1">
                                        <div class="accordion-body">
                                            PC Assembly is a service that let us to build your PC part from parts into one piece.
                                        </div>
                                    </div>
                                </div>
                                <!-- END DESCRIPTION 4 -->
                            </div>
                        </div>
                        <!-- END SERVICE DESCRIPTIONS -->
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="section-title">Gallery</h2>
                            <div class="row gutter-v2 gallery">
                                <div class="col-4">
                                    <a href="{{ asset('assets/images/gal_1.jpg') }}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/images/gal_1.jpg') }}" alt="Image" class="img-fluid"></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('assets/images/gal_2.jpg') }}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/images/gal_2.jpg') }}" alt="Image" class="img-fluid"></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('assets/images/gal_3.jpg') }}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/images/gal_3.jpg') }}" alt="Image" class="img-fluid"></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('assets/images/gal_4.jpg') }}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/images/gal_4.jpg') }}" alt="Image" class="img-fluid"></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('assets/images/gal_5.jpg') }}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/images/gal_5.jpg') }}" alt="Image" class="img-fluid"></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('assets/images/gal_6.jpg') }}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/images/gal_6.jpg') }}" alt="Image" class="img-fluid"></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('assets/images/gal_4.jpg') }}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/images/gal_7.jpg') }}" alt="Image" class="img-fluid"></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('assets/images/gal_5.jpg') }}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/images/gal_8.jpg') }}" alt="Image" class="img-fluid"></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('assets/images/gal_6.jpg') }}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/images/gal_9.jpg') }}" alt="Image" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->

        <!-- MARKETING -->
        <div class="untree_co-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 class="section-title text-center mb-3">Our Services</h2>
                        <p>We're here to be your partner in maintaining the health and performance of your computer devices. With our diverse experiences and expertise, we're ready to assist you in assembling, repairing, and maintaining your computer devices with care and high expertise.
                            We want to ensure that every customer feels valued and heard. Our team consists not only of experienced technical experts but also good listeners. We're ready to listen to every need and concern you have and work together to find the best solutions that suit your needs.<br>
                            - Techno Indie</p>
                    </div>
                </div>

                <div class="row align-items-stretch">
                    <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1">
                        <div class="feature-1 d-md-flex">
                            <div class="align-self-center">
                                <span class="flaticon-house display-4 text-primary"></span>
                                <h3>Freshly Started</h3>
                                <p class="mb-0">Even the big companies start from their small house.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >
                        <div class="feature-1 d-md-flex">
                            <div class="align-self-center">
                                <span class="flaticon-mail display-4 text-primary"></span>
                                <h3>Easy to Connect</h3>
                                <p class="mb-0">website or any social media can connect us in no time.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >
                        <div class="feature-1 d-md-flex">
                            <div class="align-self-center">
                                <span class="flaticon-phone-call display-4 text-primary"></span>
                                <h3>24/7 Support</h3>
                                <p class="mb-0">Reach to our contact, we gladly reply you with very big smile.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- NUMBERS -->
        <div class="untree_co-section count-numbers py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="counter-wrap">
                            <div class="counter">
                                <span class="" data-number="{{ $totalOrder }}">{{ $totalOrder }}</span>
                            </div>
                            <span class="caption">No. of Order</span>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="counter-wrap">
                            <div class="counter">
                                <span class="" data-number="{{ $totalClients }}">{{ $totalClients }}</span>
                            </div>
                            <span class="caption">No. of Clients</span>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="counter-wrap">
                            <div class="counter">
                                <span class="" data-number="{{ $totalProgress }}">{{ $totalProgress }}</span>
                            </div>
                            <span class="caption">No. of On Progress</span>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="counter-wrap">
                            <div class="counter">
                                <span class="" data-number="{{ $totalComplete }}">{{ $totalComplete }}</span>
                            </div>
                            <span class="caption">No. of Completed Order</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Technician and Programmer Section -->
        <div class="untree_co-section testimonial-section mt-5">
            <div class="container">
                <div class="row">
                    <!-- Technician Section -->
                    <div class="col-lg-6 text-center">
                        <h2 class="section-title mb-5">Our Technician</h2>

                        <div class="owl-single owl-carousel no-nav">
                            <div class="testimonial mx-auto">
                                <figure class="img-wrap">
                                    <img src="{{ asset('assets/images/alex.png') }}" alt="Image" class="img-fluid">
                                </figure>

                                <h3 class="name">Alexander J.</h3>

                                <blockquote>
                                    <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>

                            <div class="testimonial mx-auto">
                                <figure class="img-wrap">
                                    <img src="{{ asset('assets/images/temen_alex.jpg') }}" alt="Image" class="img-fluid">
                                </figure>

                                <h3 class="name">J. Devon G.</h3>

                                <blockquote>
                                    <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <!-- Programmer Section -->
                    <div class="col-lg-6 text-center">
                        <h2 class="section-title mb-5">Our Beloved Programmer</h2>

                        <div class="owl-single owl-carousel no-nav">
                            <div class="testimonial mx-auto">
                                <figure class="img-wrap">
                                    <img src="{{ asset('assets/images/alex.png') }}" alt="Image" class="img-fluid">
                                </figure>

                                <h3 class="name">Alexander J.</h3>

                                <blockquote>
                                    <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>

                            <div class="testimonial mx-auto">
                                <figure class="img-wrap">
                                    <img src="{{ asset('assets/images/dina.jpg') }}" alt="Image" class="img-fluid">
                                </figure>

                                <h3 class="name">Dina A.</h3>

                                <blockquote>
                                    <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TO ORDER PAGE -->
        <div class="py-5 cta-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2 class="mb-2 text-white">Let You Get Satisfied. Make Your Order Now!</h2>
                        <p class="mb-4 lead text-white text-white-opacity">Let Us Make Your Gear Completely Like New, shall we?</p>
                        <p class="mb-0"><a href="{{ url('order') }}" class="btn btn-outline-white text-white btn-md font-weight-bold">Bring me Piece!</a></p>
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
