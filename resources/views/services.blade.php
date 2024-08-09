<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Explore the range of services offered by Truck 4 You. From courier services to freight forwarding, learn how we can meet your logistics needs with efficiency and reliability." />
    <meta name="keywords"
        content="Truck 4 You, logistics services, courier services, freight forwarding, port logistics, warehousing, transportation solutions" />
    <meta name="author" content="Truck 4 You" />
    <title>Truck 4 You Services | Comprehensive Logistics Solutions</title>
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
            <h2 class="title">Services</h2>
            <ul>
                <li>Home</li>
                <li><i class="fa-solid fa-angle-right"></i></li>
                <li>Services</li>
            </ul>
        </div>
    </div>

    <!-- Services -->

    <section class="service3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-box">
                        <h3 class="title">Long-Distance Freight</h3>
                        <div class="icon">
                            <i class="ui ui-truck"></i>
                        </div>
                        <div class="content">
                            <p class="description">
                                Reliable long-distance freight solutions ensuring timely and secure delivery across
                                state lines.
                            </p>
                            <a class="button" href="contact-us">View Details<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box">
                        <h3 class="title">Temperature-Controlled Transport</h3>
                        <div class="icon">
                            <i class="ui ui-snowflake"></i>
                        </div>
                        <div class="content">
                            <p class="description">
                                Specialized transport solutions with temperature control for perishable goods.
                            </p>
                            <a class="button" href="contact-us">View Details<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box">
                        <h3 class="title">Flatbed Trucking</h3>
                        <div class="icon">
                            <i class="ui ui-truck"></i>
                        </div>
                        <div class="content">
                            <p class="description">
                                Efficient flatbed trucking services for oversized and heavy loads, ensuring safe and
                                secure transport.
                            </p>
                            <a class="button" href="contact-us">View Details<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box">
                        <h3 class="title">Expedited Shipping</h3>
                        <div class="icon">
                            <i class="ui ui-clock"></i>
                        </div>
                        <div class="content">
                            <p class="description">
                                Fast and reliable expedited shipping services to meet urgent delivery needs.
                            </p>
                            <a class="button" href="contact-us">View Details<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box">
                        <h3 class="title">Logistics Management</h3>
                        <div class="icon">
                            <i class="ui ui-cog"></i>
                        </div>
                        <div class="content">
                            <p class="description">
                                Comprehensive logistics management to streamline operations and enhance efficiency.
                            </p>
                            <a class="button" href="contact-us">View Details<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box">
                        <h3 class="title">Parcel Delivery</h3>
                        <div class="icon">
                            <i class="ui ui-package"></i>
                        </div>
                        <div class="content">
                            <p class="description">
                                Reliable parcel delivery services with options for tracking and timely updates.
                            </p>
                            <a class="button" href="contact-us">View Details<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->

    @include('quote')

    <!-- Blog Post -->

    <section class="blog-post2">

    </section>
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
