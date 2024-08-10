<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Discover the story behind Truck 4 You, our mission to provide top-notch logistics solutions, and meet the dedicated team committed to delivering exceptional transportation services." />
    <meta name="keywords"
        content="Truck 4 You, about Truck 4 You, company mission, logistics solutions, transportation services, team" />
    <meta name="author" content="Truck 4 You" />
    <title>Request a Certificate of Insurance</title>
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
            <h2 class="title">Certificate of Insurance</h2>
            <ul>
                <li>Home</li>
                <li><i class="fa-solid fa-angle-right"></i></li>
                <li>Certificate of Insurance</li>
            </ul>
        </div>
    </div>





    <div class="container"
        style="max-width: 600px; margin: 0 auto; padding: 20px; font-family: Arial, sans-serif; background-color: #f8f8f8; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2 style="color: #ff0000; text-align: center; margin-bottom: 30px;">Request a Certificate of Insurance</h2>

        @if (session('success'))
            <div id="success-message"
                style="margin-bottom: 20px; padding: 10px; background-color: #4CAF50; color: white; border-radius: 4px; text-align: center;">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div id="error-message"
                style="margin-bottom: 20px; padding: 10px; background-color: #f44336; color: white; border-radius: 4px; text-align: center;">
                <ul style="list-style-type: none; padding: 0;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="certificate-request-form" action="{{ route('certificate-request.store') }}" method="POST"
            style="background-color: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 5px rgba(0,0,0,0.05);">
            @csrf
            <input type="hidden" id="latitude" name="latitude">
            <input type="hidden" id="longitude" name="longitude">
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="companyName" style="display: block; margin-bottom: 5px; color: #333;">Company Name:</label>
                <input type="text" id="companyName" name="companyName" placeholder="Enter your company name" required
                    style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;"
                    value="{{ old('companyName') }}" />
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="dotNumber" style="display: block; margin-bottom: 5px; color: #333;">DOT Number:</label>
                <input type="text" id="dotNumber" name="dotNumber" placeholder="Enter your DOT number" required
                    style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;"
                    value="{{ old('dotNumber') }}" />
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="email" style="display: block; margin-bottom: 5px; color: #333;">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required
                    style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;"
                    value="{{ old('email') }}" />
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="certificateType" style="display: block; margin-bottom: 5px; color: #333;">Certificate
                    Type:</label>
                <select id="certificateType" name="certificateType" required
                    style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; background-color: white; box-sizing: border-box;">
                    <option value="">Select certificate type</option>
                    <option value="auto" {{ old('certificateType') == 'auto' ? 'selected' : '' }}>Auto Liability
                    </option>
                    <option value="cargo" {{ old('certificateType') == 'cargo' ? 'selected' : '' }}>Cargo Insurance
                    </option>
                    <option value="general" {{ old('certificateType') == 'general' ? 'selected' : '' }}>General
                        Liability</option>
                    <option value="workers" {{ old('certificateType') == 'workers' ? 'selected' : '' }}>Workers'
                        Compensation</option>
                </select>
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                {!! NoCaptcha::display() !!}
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <button type="submit"
                    style="width: 100%; padding: 12px; background-color: #ff0000; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; transition: background-color 0.3s;">Request
                    Certificate</button>
            </div>
        </form>
        <div id="location-status" class="location-status" style="margin-top: 20px; text-align: center; color: #333;">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const locationStatus = document.getElementById('location-status');
            const latitudeInput = document.getElementById('latitude');
            const longitudeInput = document.getElementById('longitude');

            if ("geolocation" in navigator) {
                locationStatus.textContent = "Detecting your location...";
                navigator.geolocation.getCurrentPosition(function(position) {
                    latitudeInput.value = position.coords.latitude;
                    longitudeInput.value = position.coords.longitude;
                    locationStatus.textContent = "Location detected successfully!";
                }, function(error) {
                    console.error("Error detecting location:", error);
                    locationStatus.textContent =
                        "Unable to detect location. Please ensure location services are enabled.";
                });
            } else {
                locationStatus.textContent = "Geolocation is not supported by your browser.";
            }
        });
    </script> <!-- Footer -->

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
