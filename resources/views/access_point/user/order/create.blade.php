<!doctype html>
<html lang="en">
    <head>
        @include('head_link')
        <title>Techno Indie - Order</title>
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

                        <li class="active"><a href="{{ url('order') }}">Order Service</a></li>
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
        <div class="hero hero-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mx-auto text-center">
                        <div class="intro-wrap">
                            <h1 class="mb-0">Order Service</h1>
                            <p class="text-white">You know, sometimes people need a little push to do something simple, but you still can come to us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="untree_co-section">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
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

                        <!-- GALLERY -->
                        <div class="custom-block" data-aos="fade-up">
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
                        <!-- END GALLERY -->
                    </div>

                    <!-- ORDER FORM -->
                    <div class="col-lg-4">
                        <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="section-title">Order Form</h2>

                            <form action="{{ route('pemesanan.store') }}" method="POST" class="contact-form bg-white">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-black" for="select">Service name</label>

                                            <select name="service_name" id="select" class="custom-select">
                                                <option value="">-- Select --</option>
                                                <option value="Basic Cleaning">Basic cleaning</option>
                                                <option value="Deep Cleaning">Deep cleaning</option>
                                                <option value="Peripheral Cleaning">Peripheral cleaning</option>
                                                <option value="PC Assembly">PC assembly</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-black" for="service_price">Service price</label>
                                            <input type="text" class="form-control" id="service_price" readonly>
                                            <input type="hidden" name="service_price" id="hidden_service_price">
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const select = document.getElementById('select');
                                        const servicePriceInput = document.getElementById('service_price');
                                        const hiddenServicePriceInput = document.getElementById('hidden_service_price');
                                
                                        const servicePrices = {
                                            'Basic Cleaning': 100000,
                                            'Deep Cleaning': 150000,
                                            'Peripheral Cleaning': 50000,
                                            'PC Assembly': 150000
                                        };
                                
                                        select.addEventListener('change', function() {
                                            const selectedService = select.value;
                                            if (servicePrices[selectedService]) {
                                                const price = servicePrices[selectedService];
                                                servicePriceInput.value = formatRupiah(price);
                                                hiddenServicePriceInput.value = price;
                                            } else {
                                                servicePriceInput.value = '';
                                                hiddenServicePriceInput.value = '';
                                            }
                                        });
                                
                                        function formatRupiah(number) {
                                            return 'Rp ' + number.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                                        }
                                    });
                                </script>  

                                <div class="form-group">
                                    <label class="text-black" for="select">Delivery Method</label>

                                    <select name="delivery_method" id="select" class="custom-select">
                                        <option value="">-- Select --</option>
                                        <option value="Take in Store">Take In Store</option>
                                        <option value="Deliver To Your Home">Deliver to Your Home</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="text-black" for="date">Process date</label>
                                    <input type="date" class="form-control" id="date" name="process_date">
                                </div>
                                
                                <div class="form-group">
                                    <label class="text-black" for="session_time">Session Time</label>
                                    <select name="session_time" id="session_time" class="custom-select">
                                        <option value="">-- Select --</option>
                                        <option value="10 AM">10 AM</option>
                                        <option value="1 PM">1 PM</option>
                                        <option value="4 PM">4 PM</option>
                                    </select>
                                </div>                                

                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const bookedDatesAndSessions = @json($bookedDatesAndSessions);

                                        const dateInput = document.getElementById('date');
                                        const sessionSelect = document.getElementById('session_time');

                                        function checkAvailability() {
                                            const selectedDate = dateInput.value;
                                            const bookedSessions = bookedDatesAndSessions.filter(item => item.process_date === selectedDate).map(item => item.session_time);

                                            const options = sessionSelect.options;
                                            for (let i = 0; i < options.length; i++) {
                                                options[i].disabled = false;
                                                options[i].style.color = '';
                                                options[i].innerText = options[i].innerText.replace(' (Booked)', '');
                                            }

                                            for (let i = 0; i < options.length; i++) {
                                                if (bookedSessions.includes(options[i].value)) {
                                                    options[i].disabled = true;
                                                    options[i].style.color = 'red';
                                                    options[i].innerText += ' (Booked)';
                                                }
                                            }
                                        }

                                        function highlightBookedDates() {
                                            const today = new Date().toISOString().split('T')[0];
                                            dateInput.setAttribute('min', today);

                                            bookedDatesAndSessions.forEach(item => {
                                                const option = document.createElement('option');
                                                option.value = item.process_date;
                                                option.innerText = item.process_date + ' (Booked)';
                                                option.style.color = 'red';
                                                option.disabled = true;
                                                dateInput.appendChild(option);
                                            });
                                        }

                                        dateInput.addEventListener('change', checkAvailability);
                                        highlightBookedDates();
                                    });
                                </script>

                                <div class="form-group">
                                    <label class="text-black" for="full_name">Full name</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $user->full_name }}" readonly>
                                </div>

                                {{-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-black" for="fname">First name</label>
                                            <input type="text" class="form-control" id="fname" name="first_name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-black" for="lname">Last name</label>
                                            <input type="text" class="form-control" id="lname" name="last_name">
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-black" for="phone_number">Phone number</label>
                                            <input type="text" class="form-control" id="phone_number" name="phone_number">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-black" for="email">Email address</label>
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{ $user->email }}" readonly>
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="text-black" for="address">Address</label>
                                    <textarea name="address" class="form-control" id="address" cols="30" rows="5"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-black" for="city">City</label>
                                            <input type="text" class="form-control" id="city" name="city">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="text-black" for="postal_code">Postal Code</label>
                                            <input type="number" class="form-control" id="postal_code" name="postal_code">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- END ORDER FORM -->
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
