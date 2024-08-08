<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Discover the story behind Truck 4 You, our mission to provide top-notch logistics solutions, and meet the dedicated team committed to delivering exceptional transportation services." />
    <meta name="keywords"
        content="Truck 4 You, about Truck 4 You, company mission, logistics solutions, transportation services, team" />
    <meta name="author" content="Truck 4 You" />
    <title>About Truck 4 You | Our Mission, Vision, and Team</title>
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
            <h2 class="title">About Us</h2>
            <ul>
                <li>Home</li>
                <li><i class="fa-solid fa-angle-right"></i></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>

    <!-- About Section -->
    <section class="about2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single-image3">
                        <div class="img-1">
                            <img src="assets/images/about2-img1.jpg" alt="Truck Fleet" />
                        </div>
                        <div class="img-2">
                            <img src="assets/images/about2-img2.jpg" alt="Logistics Team" />
                        </div>
                        <div class="img-3">
                            <img src="assets/images/about2-img3.jpg" alt="Nationwide Service" />
                        </div>
                        <div class="text-box">
                            <h2>10+</h2>
                            <h4>Years of Excellence</h4>
                        </div>
                        <div class="shape">
                            <img src="assets/images/about2-shape.png" alt="Shape" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title left">
                            <h4 class="subtitle">Why Choose Us</h4>
                            <h2 class="title">Nationwide Service, Unmatched Reliability</h2>
                            <p class="description">
                                With over a decade of experience in the logistics and transportation industry,
                                we pride ourselves on delivering top-notch services. Our dedicated team ensures
                                efficient, reliable, and timely deliveries across the USA. We’ve built a strong
                                reputation for reliability, making us your trusted partner for all your transportation
                                needs.
                            </p>
                        </div>
                        <div class="progress-bars">
                            <div class="progress-item">
                                <div class="progress-name">On-Time Deliveries</div>
                                <div class="progress-stick">
                                    <div class="progress-per" per="90"></div>
                                </div>
                            </div>
                            <div class="progress-item">
                                <div class="progress-name">Nationwide Coverage</div>
                                <div class="progress-stick">
                                    <div class="progress-per" per="85"></div>
                                </div>
                            </div>
                            <div class="progress-item">
                                <div class="progress-name">Customer Satisfaction</div>
                                <div class="progress-stick">
                                    <div class="progress-per" per="92"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience -->

    <section class="experience2">
        <div class="container">
            <div class="exp-list">
                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <h3>Nationwide Coverage</h3>
                </div>
                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <h3>On-Time Deliveries</h3>
                </div>
                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <h3>Reliable Transport</h3>
                </div>
                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <h3>Seamless Logistics</h3>
                </div>
                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <h3>Experienced Team</h3>
                </div>
                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <h3>Customer Satisfaction</h3>
                </div>
                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <h3>Efficient Fleet</h3>
                </div>
                <div class="item">
                    <i class="fa-solid fa-check"></i>
                    <h3>Flexible Solutions</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter -->

    <section class="counter2">
        <div class="container">
            <div class="counter-area">
                <div class="counter-box2">
                    <div class="content" id="counter">
                        <span class="count" data-count="10">0</span><span class="suffix">+</span>
                        <p>Years of Service</p>
                    </div>
                </div>
                <div class="counter-box2">
                    <div class="content" id="counter">
                        <span class="count" data-count="200">0</span><span class="suffix">+</span>
                        <p>Trucks in Fleet</p>
                    </div>
                </div>
                <div class="counter-box2">
                    <div class="content" id="counter">
                        <span class="count" data-count="1500">0</span><span class="suffix">+</span>
                        <p>Deliveries Made</p>
                    </div>
                </div>
                <div class="counter-box2">
                    <div class="content" id="counter">
                        <span class="count" data-count="50">0</span><span class="suffix">+</span>
                        <p>Safety Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->

    @include('footer')
    <!-- Search Window -->

    <div class="search-window">
        <button class="search-close"><i class="fa-solid fa-xmark"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here"
                    required="" />
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
