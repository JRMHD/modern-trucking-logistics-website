<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #0056b3;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .content {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.8em;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Truck4you</h1>
    </div>
    <div class="content">
        <h2>Thank You for Subscribing!</h2>
        <p>Dear {{ $subscriber->name }},</p>
        <p>We're excited to have you on board. You've successfully subscribed to our newsletter.</p>
        <p>Stay tuned for the latest updates, offers, and news from Truck4you.</p>
        <p>If you have any questions, feel free to contact us at letsroll@truk4you.com.</p>
    </div>
    <div class="footer">
        <p>&copy; 2024 Truck4you. All rights reserved.</p>
    </div>
</body>

</html>
