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
            <h2 class="title">Employee Application</h2>
            <ul>
                <li>Home</li>
                <li><i class="fa-solid fa-angle-right"></i></li>
                <li>Employee Application</li>
            </ul>
        </div>
    </div>

    <!-- Employee Application Form -->

    <section class="employee-application">
        <div class="container">
            <h2>Employee Application Form</h2>
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
            <form action="{{ route('submit.application') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Name -->
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>

                <!-- Current License Type, State, and Number -->
                <div class="form-group">
                    <label for="license">Current License Type, State, and Number:</label>
                    <input type="text" id="license" name="license" placeholder="License Type, State, and Number"
                        required>
                </div>

                <!-- License Expiration Date -->
                <div class="form-group">
                    <label for="license-expiration">License Expiration Date:</label>
                    <input type="date" id="license-expiration" name="license_expiration" required>
                </div>

                <!-- Endorsements/Restrictions -->
                <div class="form-group">
                    <label for="endorsements">Endorsements/Restrictions:</label>
                    <input type="text" id="endorsements" name="endorsements" placeholder="Endorsements/Restrictions"
                        required>
                </div>

                <!-- Permission to run background and credit check -->
                {{-- <div class="form-group">
                    <label for="background-check">
                        <input type="checkbox" id="background-check" name="background_check">
                        Permission to run background and credit check
                    </label>
                </div> --}}


                <!-- Preferred Work Schedule/Type -->
                <div class="form-group">
                    <label for="schedule">Preferred Work Schedule/Type:</label>
                    <input type="text" id="schedule" name="schedule" placeholder="Preferred Work Schedule/Type"
                        required>
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" placeholder="Your Address" required>
                </div>

                <!-- Phone -->
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" placeholder="Your Phone" required>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>

                <!-- Experience/History/References -->
                <div class="form-group">
                    <label for="experience">Experience/History/References (3 or more):</label>
                    <textarea id="experience" name="experience" rows="5"
                        placeholder="Describe your experience, history, and references" required></textarea>
                </div>

                <!-- Upload Resume Documents -->
                <div class="form-group">
                    <label for="resume">Upload Resume Documents:</label>
                    <input type="file" id="resume" name="resume">
                </div>

                <!-- Owner Operator or Driver -->
                <div class="form-group">
                    <label>Owner Operator or Driver:</label>
                    <div>
                        <label><input type="radio" id="owner-operator" name="role" value="Owner Operator"
                                required> Owner Operator</label>
                        <label><input type="radio" id="driver" name="role" value="Driver" required>
                            Driver</label>
                    </div>
                </div>
                <!-- Add reCAPTCHA widget -->
                {!! NoCaptcha::display() !!}

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit">Submit Application</button>
                </div>
            </form>
        </div>
    </section>

    <style>
        .employee-application {
            background-color: #f8f9fa;
            padding: 30px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .employee-application h2 {
            color: #e74c3c;
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="date"],
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group input[type="checkbox"] {
            margin-right: 10px;
        }

        .form-group input[type="file"] {
            border: none;
        }

        .form-group button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #c0392b;
        }
    </style>

    <!-- Company Information Section -->

    <section class="company-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="info-list">
                        <li>
                            <h3 class="title">
                                <div class="text">
                                    <span>01</span>What are the key benefits of working with us?
                                </div>
                                <i class="fa-regular fa-plus"></i>
                                <i class="fa-solid fa-minus"></i>
                            </h3>
                            <p>
                                Our employees enjoy competitive salaries, comprehensive health benefits, flexible work
                                hours, and opportunities for professional growth and development.
                            </p>
                        </li>
                        <li>
                            <h3 class="title">
                                <div class="text">
                                    <span>02</span>What does the typical career path look like?
                                </div>
                                <i class="fa-regular fa-plus"></i>
                                <i class="fa-solid fa-minus"></i>
                            </h3>
                            <p>
                                Employees typically start in entry-level positions and can advance to senior roles
                                through performance, experience, and professional development. We offer mentoring and
                                training to support career growth.
                            </p>
                        </li>
                        <li>
                            <h3 class="title">
                                <div class="text">
                                    <span>03</span>What is the company culture like?
                                </div>
                                <i class="fa-regular fa-plus"></i>
                                <i class="fa-solid fa-minus"></i>
                            </h3>
                            <p>
                                Our company culture is collaborative, inclusive, and focused on innovation. We value
                                teamwork, respect, and a positive work environment where every employee’s voice is
                                heard.
                            </p>
                        </li>
                        <li>
                            <h3 class="title">
                                <div class="text">
                                    <span>04</span>What are the primary responsibilities for this role?
                                </div>
                                <i class="fa-regular fa-plus"></i>
                                <i class="fa-solid fa-minus"></i>
                            </h3>
                            <p>
                                Responsibilities include managing projects, leading teams, and ensuring the successful
                                delivery of services. Specific duties vary by role but generally involve strategic
                                planning and problem-solving.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h2 class="title">Contact Us</h2>
                        <p>If you have any questions or need more information, feel free to reach out to us:</p>
                        <p><strong>Email:</strong> letsroll@truk4you.com</p>
                        <p><strong>Phone:</strong> (303) 944-7371</p>
                        <p><strong>Address:</strong> Janesville, WI & Thornton, CO</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        .company-info {
            background-color: #ffffff;
            padding: 30px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .company-info h2.title {
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
