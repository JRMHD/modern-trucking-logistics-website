<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Truck 4 You offers top-notch transportation and logistics solutions, including freight services, courier delivery, and warehousing. Discover reliable and efficient solutions for all your logistics needs." />
    <meta name="keywords"
        content="transportation, logistics, freight services, courier delivery, warehousing, Truck 4 You" />
    <meta name="author" content="Truck 4 You" />
    <title>Truck 4 You | Leading Transportation & Logistics Solutions</title>
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

    <!-- Hero Section -->
    <section class="hero2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h4 class="subtitle">Quick Transport and Logistics Solutions</h4>
                            <h2 class="title">
                                <span>Streamlining Limit</span> Shipping Logistics
                            </h2>
                        </div>
                        <div class="hero-tabs">
                            <ul class="tab-navigation">
                                <li class="nav-item active" rel="tab1">Route Clock</li>
                                <li class="nav-item" rel="tab2">Get Quote</li>
                                <li class="nav-item" rel="tab3">Branches</li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab1" class="tab-body">
                                    <div class="clock-container">
                                        <div class="clock">
                                            <h4 class="location" id="userLocation">Loading location...</h4>
                                            <div class="time" id="localTime">--:--:--</div>
                                            <div class="date" id="localDate">Loading date...</div>
                                        </div>
                                    </div>
                                </div>

                                <style>
                                    .clock-container {
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        padding: 10px;
                                        background-color: #f0f0f0;
                                        border-radius: 8px;
                                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                                        max-width: 200px;
                                        margin: 0 auto;
                                    }

                                    .clock {
                                        text-align: center;
                                        background-color: #ffffff;
                                        padding: 10px;
                                        border-radius: 5px;
                                        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
                                        font-size: 12px;
                                    }

                                    .location {
                                        font-size: 14px;
                                        font-weight: bold;
                                        margin-bottom: 5px;
                                    }

                                    .time {
                                        font-size: 16px;
                                        font-weight: bold;
                                        margin-bottom: 3px;
                                    }

                                    .date {
                                        font-size: 12px;
                                        color: #555;
                                    }
                                </style>


                                <div id="tab2" class="tab-body">
                                    <div class="quote-form">
                                        <form action="submit_quote.php" method="POST"
                                            style="max-width: 500px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                            <div style="margin-bottom: 15px;">
                                                <label for="name"
                                                    style="display: block; font-weight: bold; margin-bottom: 5px;">Name:</label>
                                                <input type="text" id="name" name="name" required
                                                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                            </div>
                                            <div style="margin-bottom: 15px;">
                                                <label for="email"
                                                    style="display: block; font-weight: bold; margin-bottom: 5px;">Email:</label>
                                                <input type="email" id="email" name="email" required
                                                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                            </div>
                                            <div style="margin-bottom: 15px;">
                                                <label for="phone"
                                                    style="display: block; font-weight: bold; margin-bottom: 5px;">Phone
                                                    Number:</label>
                                                <input type="tel" id="phone" name="phone" required
                                                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                            </div>
                                            <div style="margin-bottom: 15px;">
                                                <label for="location"
                                                    style="display: block; font-weight: bold; margin-bottom: 5px;">Location:</label>
                                                <input type="text" id="location" name="location" required
                                                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                            </div>
                                            <div style="margin-bottom: 20px;">
                                                <label for="message"
                                                    style="display: block; font-weight: bold; margin-bottom: 5px;">Enter
                                                    text...</label>
                                                <textarea id="message" name="message" required
                                                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; height: 100px;"></textarea>
                                            </div>
                                            <div>
                                                <button type="submit">Submit</button>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                                <div id="tab3" class="tab-body">
                                    <div class="contact-info">
                                        <div class="icon-box">
                                            <div class="icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Janesville, WI Office</h4>
                                                <p class="description">
                                                    Janesville, Wisconsin, USA
                                                </p>
                                            </div>
                                        </div>
                                        <div class="icon-box">
                                            <div class="icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Thornton, CO Office</h4>
                                                <p class="description">
                                                    Thornton, Colorado, USA
                                                </p>
                                            </div>
                                        </div>
                                        <div class="icon-box">
                                            <div class="icon">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Contact Phone</h4>
                                                <p class="description">
                                                    (303) 944-7371
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image">
                        <div class="img">
                            <img src="assets/images/hero-2-img.png" alt="image" />
                        </div>
                        <div class="bg-circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="assets/images/hero-shape.png" alt="shape" />
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


    <!-- Service Section -->
    <section class="service2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title left">
                        <h4 class="subtitle">Our Services</h4>
                        <h2 class="title">
                            Excellence in Logistics and Transportation
                        </h2>
                        <p class="description">
                            With a decade of industry experience, we offer a range of logistics and transportation
                            services designed to meet your needs efficiently and reliably. Discover how we can support
                            your operations with our tailored solutions.
                        </p>
                    </div>
                    <div class="service-btn">
                        <a class="button" href="services"><span></span>Explore All Services<i
                                class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box">
                        <h3 class="title">Warehousing</h3>
                        <div class="icon">
                            <i class="fa-solid fa-box"></i>
                        </div>
                        <div class="content">
                            <p class="description">
                                Our secure and strategically located warehouses ensure that your inventory is managed
                                efficiently and safely. Benefit from our advanced warehousing solutions tailored to your
                                needs.
                            </p>
                            <a class="button" href="contact-us">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box">
                        <h3 class="title">Courier Services</h3>
                        <div class="icon">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                        <div class="content">
                            <p class="description">
                                Our reliable courier services ensure timely and secure delivery of your packages. From
                                local to nationwide deliveries, we handle it all with precision.
                            </p>
                            <a class="button" href="contact-us">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box">
                        <h3 class="title">Port Logistics</h3>
                        <div class="icon">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <div class="content">
                            <p class="description">
                                Our port logistics services streamline the handling of goods through ports, ensuring
                                efficient processing and minimal delays. Trust us to manage your port operations
                                seamlessly.
                            </p>
                            <a class="button" href="contact-us">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box">
                        <h3 class="title">Freight Forwarding</h3>
                        <div class="icon">
                            <i class="fa-solid fa-plane"></i>
                        </div>
                        <div class="content">
                            <p class="description">
                                Our freight forwarding services cover all aspects of transportation, from booking to
                                delivery. We ensure your goods reach their destination safely and on time.
                            </p>
                            <a class="button" href="contact-us">Learn More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
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

    <!-- Work Process -->

    <section class="work-process2">
        <div class="container">
            <div class="section-title center">
                <h4 class="subtitle">Our Work Process</h4>
                <h2 class="title">Driving Efficiency, Ensuring Reliability</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="process-item">
                        <div class="icon">
                            <i class="ui ui-truck"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Route Optimization</h3>
                            <p class="description">
                                We use advanced technology to optimize routes, ensuring timely and cost-effective
                                deliveries.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-6">
                    <div class="process-item">
                        <div class="icon">
                            <i class="ui ui-calendar"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Real-Time Tracking</h3>
                            <p class="description">
                                Our state-of-the-art tracking system provides real-time updates on your cargo's
                                location, enhancing transparency and reliability.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="process-item">
                        <div class="icon">
                            <i class="ui ui-shield"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Safety First</h3>
                            <p class="description">
                                We prioritize safety in all aspects of our operations, from secure cargo handling to
                                rigorous vehicle maintenance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </section>


    <!-- Contact Form -->

    <section class="home-contact2">
        <div class="container">
            <div class="section-title center">
                <h4 class="subtitle">Talk with us</h4>
                <h2 class="title">Fueling Growth, Driving Logistics Innovation</h2>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="form-area">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <label for="fname">Your first name</label>
                                    <div class="name-field">
                                        <input type="text" id="fname" name="fname"
                                            placeholder="Your first name" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="email">Your last name</label>
                                    <div class="email-field">
                                        <input type="text" id="email" name="lname"
                                            placeholder="Your last name" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="email">Your E-mail</label>
                                    <div class="email-field">
                                        <input type="text" id="email" name="usermail"
                                            placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="phone">Your Phone</label>
                                    <div class="phone-field">
                                        <input type="text" id="phone" name="userphone"
                                            placeholder="Your Phone" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="message">Message</label>
                                    <div class="message-field">
                                        <textarea name="message" id="message" cols="30" rows="10">
Write Message..</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="radio-field">
                                        <input type="radio" id="terms" />
                                        <label for="terms">I have read and accept the</label>
                                        <a href="contact-us">Terms and Conditions</a>
                                        <a href="contact-us">Privacy Policy</a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>


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



    {{-- <script></script> --}}

    <script>
        function updateTime(timezone, locationName) {
            const localTimeElement = document.getElementById('localTime');
            const localDateElement = document.getElementById('localDate');
            const userLocationElement = document.getElementById('userLocation');

            const localTime = new Date().toLocaleString("en-US", {
                timeZone: timezone
            });
            const localDate = new Date().toLocaleDateString("en-US", {
                timeZone: timezone,
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });

            localTimeElement.innerHTML = localTime.split(", ")[1];
            localDateElement.innerHTML = localDate;
            userLocationElement.innerHTML = locationName;
        }

        function getLocation() {
            fetch('https://ipapi.co/json/')
                .then(response => response.json())
                .then(data => {
                    const locationName = `${data.city}, ${data.region}`;
                    const timezone = data.timezone;
                    updateTime(timezone, locationName);
                })
                .catch(error => {
                    console.error('Error fetching location data:', error);
                    const defaultTimezone = 'America/Chicago'; // Fallback timezone
                    updateTime(defaultTimezone, 'Unknown Location');
                });
        }

        getLocation();
        setInterval(getLocation, 1000); // update every second
    </script>


    {{-- <script></script> --}}

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/venobox.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
