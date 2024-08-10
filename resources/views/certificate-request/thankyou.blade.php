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
            max-width: 400px;
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
    </style>
</head>

<body>
    <div class="container">
        <h2>Thank You for Your Request</h2>
        <p>We have received your Certificate of Insurance request. Our team at Truck4You will process it and get back to
            you shortly.</p>
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
