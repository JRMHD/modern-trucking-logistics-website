<!-- Footer -->
<script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Footer -->
<!-- Footer -->
<footer class="site-footer2">
    <div class="container">
        <div class="footer-info">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="footer-widget about-widget">
                        <div class="footer-logo">
                            <img src="{{ asset('assets/images/footer-logo.png') }}" alt="logo"
                                style="max-width: 250px; height: auto;" />
                        </div>
                        <p class="description">
                            Quick Transport and Logistics Solutions<br>
                            Experience a new level of efficiency and reliability in transportation. Our dedicated team
                            ensures a seamless experience from start to finish. Contact us today to get started.
                        </p>
                        <div class="social-icons">
                            <ul>
                                <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="tracking-form">
                        <h2 class="title">Subscribe to Our Newsletter</h2>
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
                        <form id="subscriptionForm" action="{{ url('subscribe') }}" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Enter Your Name" required
                                value="{{ old('name') }}" />
                            <input type="email" name="email" placeholder="Enter Your Email" required
                                value="{{ old('email') }}" />
                            {!! NoCaptcha::display() !!}
                            <button type="submit">
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="row">
                <div class="col-md-4 col-lg-2">
                    <div class="footer-widget service-widget">
                        <h3 class="widget-title">Services</h3>
                        <ul>
                            <li><a href="{{ url('contact-us') }}">Express Delivery</a></li>
                            <li><a href="{{ url('contact-us') }}">Warehousing Solutions</a></li>
                            <li><a href="{{ url('contact-us') }}">Freight Forwarding</a></li>
                            <li><a href="{{ url('contact-us') }}">Last-Mile Delivery</a></li>
                        </ul>
                    </div>
                </div>
                <!-- You can add more columns here for additional footer widgets if needed -->
            </div>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="col-lg-6">
                    <p class="copyright-text">
                        © {{ date('Y') }} Quick Transport and Logistics Solutions. All Rights Reserved | Designed
                        by <a href="https://www.jrmhd.tech/">JRMHD Technologies</a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <ul class="copyright-link">
                        <li><a href="{{ url('terms') }}">Terms & Conditions</a></li>
                        <li><a href="{{ url('privacy') }}">Privacy Policy</a></li>
                        <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

@push('scripts')
    {!! NoCaptcha::renderJs() !!}
@endpush
