<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Subscriber Notification</title>
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

        .subscriber-info {
            background-color: #e9ecef;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
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
        <h2>New Newsletter Subscriber</h2>
        <p>A new user has subscribed to the Truck4you newsletter.</p>
        <div class="subscriber-info">
            <p><strong>Name:</strong> {{ $subscriber->name }}</p>
            <p><strong>Email:</strong> {{ $subscriber->email }}</p>
            <p><strong>Subscribed on:</strong> {{ $subscriber->created_at->format('F j, Y, g:i a') }}</p>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Truck4you. All rights reserved.</p>
    </div>
</body>

</html>
