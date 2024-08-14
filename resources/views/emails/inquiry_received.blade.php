<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Equipment Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background-color: #e74c3c;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .content {
            padding: 20px;
        }

        .field {
            margin-bottom: 15px;
        }

        .field label {
            font-weight: bold;
            color: #333333;
        }

        .field p {
            margin: 5px 0;
            color: #555555;
            line-height: 1.6;
        }

        .footer {
            background-color: #e74c3c;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            Truck4you
        </div>
        <div class="content">
            <p>Hello Truck4you Team,</p>
            <p>You have a new equipment inquiry submission:</p>
            <div class="field">
                <label>Name:</label>
                <p>{{ $inquiry->name }}</p>
            </div>
            <div class="field">
                <label>Email:</label>
                <p>{{ $inquiry->email }}</p>
            </div>
            <div class="field">
                <label>Phone:</label>
                <p>{{ $inquiry->phone }}</p>
            </div>
            <div class="field">
                <label>DOT/MC Number:</label>
                <p>{{ $inquiry->dot_mc_number }}</p>
            </div>
            <div class="field">
                <label>Type of Equipment:</label>
                <p>{{ $inquiry->equipment_type }}</p>
            </div>
            <div class="field">
                <label>Equipment Details:</label>
                <p>{{ $inquiry->equipment_details }}</p>
            </div>
            <div class="field">
                <label>Additional Information:</label>
                <p>{{ $inquiry->additional_info }}</p>
            </div>
            <p>Thank you for your attention.</p>
        </div>
        <div class="footer">
            &copy; <span id="year"></span> Truck4you. All rights reserved.
        </div>
    </div>
    <script>
        // Update the year automatically
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>

</html>
