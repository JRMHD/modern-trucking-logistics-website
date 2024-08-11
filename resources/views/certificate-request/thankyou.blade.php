<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Request - Truck4You</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h2 {
            color: #cc0000;
            margin-top: 0;
        }

        p {
            margin-bottom: 30px;
            color: #555;
        }

        .btn {
            display: inline-block;
            background-color: #cc0000;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #990000;
            transform: translateY(-2px);
        }

        .footer {
            margin-top: 30px;
            color: #777;
            font-size: 14px;
        }

        .alert {
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            color: #fff;
        }

        .alert-success {
            background-color: #28a745;
        }

        .alert-error {
            background-color: #dc3545;
        }

        .alert-warning {
            background-color: #ffc107;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Thank You for Your Request</h2>

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            <p>We have received your Certificate of Insurance request. Our team at Truck4You will process it and get
                back to you shortly.</p>
        @endif

        <!-- Display warning message -->
        @if (session('warning'))
            <div class="alert alert-warning">
                {{ session('warning') }}
            </div>
        @endif

        <!-- Display error message -->
        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ url('certrequest') }}" class="btn">Back to Home</a>
        <div class="footer">
            &copy; <span id="year"></span> Truck4You. All rights reserved.
        </div>
    </div>
    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>

</html>
