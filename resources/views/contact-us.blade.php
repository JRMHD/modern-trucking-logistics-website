<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Get in touch with Truck 4 You for all your logistics needs. Find our contact details, office location, and a convenient form to reach out to our team for inquiries and support." />
    <meta name="keywords"
        content="Truck 4 You, contact Truck 4 You, logistics contact, customer support, office location, contact form" />
    <meta name="author" content="Truck 4 You" />
    <title>Contact Truck 4 You | Get in Touch with Us</title>
    <link rel="icon" href="assets/images/favicon.png" type="image/png" />
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/venobox.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>


<body>
    <!-- Preloader -->

    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>

    @include('header')

    <!-- Breadcrumb -->

    <div class="breadcrumb-area">
        <div class="container">
            <h2 class="title">Contact Us</h2>
            <ul>
                <li>Home</li>
                <li><i class="fa-solid fa-angle-right"></i></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>

    <!-- Contact Form -->

    <section class="contact-page-form">
        <div class="container">
            {{-- <h2 class="form-title">Feel free to message</h2> --}}
            <div class="row">
                {{-- <div class="col-lg-8">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('contact.submit') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <input type="text" name="username" placeholder="Your name"
                                    value="{{ old('username') }}" required />
                                @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <input type="email" name="usermail" placeholder="Your Email"
                                    value="{{ old('usermail') }}" required />
                                @error('usermail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <input type="text" name="userphone" placeholder="Phone"
                                    value="{{ old('userphone') }}" required />
                                @error('userphone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <input type="text" name="usersubject" placeholder="Subject"
                                    value="{{ old('usersubject') }}" required />
                                @error('usersubject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <textarea name="usermessage" rows="6" placeholder="Message" required>{{ old('usermessage') }}</textarea>
                                @error('usermessage')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Add reCAPTCHA widget -->
                            {!! NoCaptcha::display() !!}
                            <div class="col-lg-12">
                                <button type="submit">Send A Message</button>
                            </div>
                        </div>
                    </form>


                </div> --}}
                @include('quote')

                <div class="col-lg-4">
                    <div class="info-box">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Address</h4>
                                <p>
                                    Janesville, WI & Thornton, CO
                                </p>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Email Address</h4>
                                <p>letsroll@truk4you.com<br /></p>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Phone number</h4>
                                <p>(303) 944-7371<br />24 hour open</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- @push('scripts')
        {!! NoCaptcha::renderJs() !!}
    @endpush --}}
    <!-- Map Area -->

    <section class="map-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93856.57383597264!2d-89.09209469777515!3d42.68216247044957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880617924d2239db%3A0xbfbb4761fcdbec0!2sJanesville%2C%20WI%2C%20USA!5e0!3m2!1sen!2ske!4v1723155530790!5m2!1sen!2ske"
            width="1800" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- Footer -->

    @include('footer')

    <!-- Search Window -->

    <div class="search-window">
        <button class="search-close"><i class="fa-solid fa-xmark"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="" />
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </form>
    </div>

    <!-- Back to top-->

    <div class="prgoress_scrollup">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/venobox.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
