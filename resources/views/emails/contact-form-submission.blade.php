<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f4f7f9;
            color: #333;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 20px;
            border-bottom: 2px solid #e74c3c;
            padding-bottom: 10px;
        }

        .info {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
            color: #2c3e50;
        }

        .message {
            background-color: #ffffff;
            padding: 15px;
            border-left: 5px solid #e74c3c;
            border-radius: 5px;
            color: #7f8c8d;
            margin-top: 10px;
            line-height: 1.5;
        }

        footer {
            text-align: center;
            color: #95a5a6;
            margin-top: 30px;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Message from {{ $submission->username }}</h1>
        <div class="info">
            <p><span class="label">Name:</span> {{ $submission->username }}</p>
            <p><span class="label">Email:</span> {{ $submission->usermail }}</p>
            <p><span class="label">Phone:</span> {{ $submission->userphone }}</p>
            <p><span class="label">Subject:</span> {{ $submission->usersubject }}</p>
        </div>
        <div class="message">
            <p><span class="label">Message:</span></p>
            <p>{{ $submission->usermessage }}</p>
        </div>
    </div>
    <footer>
        &copy; {{ date('Y') }} Truck4You. All rights reserved.
    </footer>
</body>

</html>
