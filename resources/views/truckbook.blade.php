<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Truck 4 You offers a range of logistics solutions including courier services, freight forwarding, and warehousing. Discover how we can help streamline your operations." />
    <meta name="keywords"
        content="Truck 4 You, logistics, courier services, freight forwarding, warehousing, transportation solutions" />
    <meta name="author" content="Truck 4 You" />
    <title>Truck 4 You | Your Logistics Partner</title>
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
            <h2 class="title">Equipemnt Enquiry </h2>
            <ul>
                <li>Home</li>
                <li><i class="fa-solid fa-angle-right"></i></li>
                <li>Equipemnt Enquiry</li>
            </ul>
        </div>
    </div>

    <!-- Equipemts Enquiry -->

    <!-- Equipment Enquiry Form -->
    <section class="equipment-enquiry"
        style="background-color: #f9f9f9; padding: 30px; border-radius: 8px; max-width: 800px; margin: auto;">
        <div class="container">
            <h2 style="text-align: center; color: #e74c3c;">Equipment Enquiry Form</h2>

            <!-- Success and Error Messages -->
            <div class="form-messages">
                @if (session('success'))
                    <div class="alert alert-success"
                        style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 10px;">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger"
                        style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 4px; margin-bottom: 10px;">
                        {{ session('error') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger"
                        style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 4px; margin-bottom: 10px;">
                        <ul style="margin: 0; padding: 0; list-style-type: none;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <form action="{{ route('inquiry.store') }}" method="POST" enctype="multipart/form-data"
                style="display: flex; flex-direction: column; gap: 15px;">
                @csrf

                <!-- Name -->
                <div class="form-group" style="display: flex; flex-direction: column;">
                    <label for="name" style="font-weight: bold; margin-bottom: 5px;">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required
                        style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                </div>

                <!-- Email -->
                <div class="form-group" style="display: flex; flex-direction: column;">
                    <label for="email" style="font-weight: bold; margin-bottom: 5px;">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required
                        style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                </div>
                <!-- Phone -->
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="phone" style="font-weight: bold; margin-bottom: 5px;">Phone:</label>
                    <input type="text" id="phone" name="phone" placeholder="Your Phone" required
                        style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 6px; box-sizing: border-box;">
                </div>
                <!-- DOT/MC Number -->
                <div class="form-group" style="display: flex; flex-direction: column;">
                    <label for="dot_mc_number" style="font-weight: bold; margin-bottom: 5px;">DOT/MC Number:</label>
                    <input type="text" id="dot_mc_number" name="dot_mc_number" placeholder="DOT/MC Number" required
                        style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                </div>

                <!-- Equipment Type -->
                <div class="form-group" style="display: flex; flex-direction: column;">
                    <label for="equipment_type" style="font-weight: bold; margin-bottom: 5px;">Type of
                        Equipment:</label>
                    <select id="equipment_type" name="equipment_type" required
                        style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                        <option value="Hotshot">Hotshot</option>
                        <option value="Dry Van">Dry Van</option>
                        <option value="Flatbed">Flatbed</option>
                        <option value="Reefer">Reefer</option>
                        <option value="Power Only">Power Only</option>
                    </select>
                </div>

                <!-- Equipment Details -->
                <div class="form-group" style="display: flex; flex-direction: column;">
                    <label for="equipment_details" style="font-weight: bold; margin-bottom: 5px;">Equipment
                        Details:</label>
                    <textarea id="equipment_details" name="equipment_details" rows="5"
                        placeholder="Provide details about the equipment"
                        style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;"></textarea>
                </div>

                <!-- Additional Information -->
                <div class="form-group" style="display: flex; flex-direction: column;">
                    <label for="additional_info" style="font-weight: bold; margin-bottom: 5px;">Additional
                        Information:</label>
                    <textarea id="additional_info" name="additional_info" rows="5"
                        placeholder="Provide any additional details here"
                        style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;"></textarea>
                </div>
                <!-- Add reCAPTCHA widget -->
                {!! NoCaptcha::display() !!}

                <!-- Submit Button -->
                <div class="form-group" style="margin-top: 20px;">
                    <button type="submit"
                        style="width: auto; padding: 10px 20px; border: none; border-radius: 6px; background-color: #e74c3c; color: #fff; font-size: 16px; cursor: pointer; transition: background-color 0.3s, color 0.3s;">
                        Submit Enquiry
                    </button>
                </div>
            </form>
        </div>
    </section>






    <!-- Equipment Enquiry Information Section -->
    <section class="equipment-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="info-list">
                        <li>
                            <h3 class="title">
                                <div class="text">
                                    <span>01</span>What types of equipment do you offer?
                                </div>
                                <i class="fa-regular fa-plus"></i>
                                <i class="fa-solid fa-minus"></i>
                            </h3>
                            <p>
                                We offer a wide range of equipment including Hotshot, Dry Van, Flatbed, Reefer, and
                                Power Only services. Each type of equipment is available to meet your specific needs.
                            </p>
                        </li>
                        <li>
                            <h3 class="title">
                                <div class="text">
                                    <span>02</span>What are the benefits of our equipment services?
                                </div>
                                <i class="fa-regular fa-plus"></i>
                                <i class="fa-solid fa-minus"></i>
                            </h3>
                            <p>
                                Our equipment services come with flexible scheduling, competitive rates, and reliable
                                performance. We prioritize safety and efficiency, ensuring your equipment needs are met
                                with professionalism.
                            </p>
                        </li>
                        <li>
                            <h3 class="title">
                                <div class="text">
                                    <span>03</span>How can I request a quote for equipment?
                                </div>
                                <i class="fa-regular fa-plus"></i>
                                <i class="fa-solid fa-minus"></i>
                            </h3>
                            <p>
                                To request a quote, please fill out our Equipment Enquiry Form with details about your
                                needs. Our team will provide a customized quote based on the type of equipment and
                                services required.
                            </p>
                        </li>
                        <li>
                            <h3 class="title">
                                <div class="text">
                                    <span>04</span>What is the process for equipment maintenance?
                                </div>
                                <i class="fa-regular fa-plus"></i>
                                <i class="fa-solid fa-minus"></i>
                            </h3>
                            <p>
                                We conduct regular maintenance checks and offer repair services to ensure all equipment
                                remains in top condition. Our team schedules and performs maintenance to prevent
                                downtime and ensure optimal performance.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h2 class="title">Contact Us for Equipment Enquiries</h2>
                        <p>If you have any questions or need more information about our equipment, feel free to reach
                            out to us:</p>
                        <p><strong>Email:</strong> info@truk4you.com</p>
                        <p><strong>Phone:</strong> (303) 944-7371</p>
                        <p><strong>Address:</strong> Janesville, WI & Thornton, CO</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .equipment-info {
            background-color: #ffffff;
            padding: 30px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .equipment-info h2.title {
            color: #e74c3c;
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 700;
        }

        .info-list {
            list-style-type: none;
            padding: 0;
        }

        .info-list li {
            margin-bottom: 15px;
        }

        .info-list .title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            cursor: pointer;
        }

        .info-list .title .text {
            display: flex;
            align-items: center;
        }

        .info-list .title span {
            background-color: #e74c3c;
            color: #fff;
            border-radius: 50%;
            padding: 5px 10px;
            margin-right: 10px;
        }

        .info-list .title i {
            color: #e74c3c;
            transition: color 0.3s;
        }

        .info-list .title:hover i {
            color: #555;
        }

        .info-list p {
            margin-top: 10px;
            color: #555;
            font-size: 16px;
        }

        .contact-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-info p {
            font-size: 16px;
            color: #333;
        }

        .contact-info strong {
            color: #e74c3c;
        }
    </style>

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
