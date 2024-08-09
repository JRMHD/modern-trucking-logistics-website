<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Quote Request</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #e74c3c;
            /* Red color for branding */
        }

        h1 {
            color: #e74c3c;
            /* Red color for branding */
            font-size: 26px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 700;
        }

        p {
            margin: 12px 0;
            font-size: 16px;
            color: #333;
        }

        .label {
            font-weight: bold;
            color: #000;
            /* Black for labels */
        }

        .content {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 2px solid #eaeaea;
            color: #555;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #666;
        }

        .footer a {
            color: #e74c3c;
            /* Red color for links */
            text-decoration: none;
            font-weight: bold;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Quote Request</h1>

        <p><span class="label">First Name:</span> {{ $quote->fname }}</p>
        <p><span class="label">Last Name:</span> {{ $quote->lname }}</p>
        <p><span class="label">Email:</span> {{ $quote->usermail }}</p>
        <p><span class="label">Phone:</span> {{ $quote->userphone }}</p>
        <p><span class="label">Phone Extension:</span> {{ $quote->phone_ext }}</p>
        <p><span class="label">Company:</span> {{ $quote->company }}</p>
        <p><span class="label">Equipment Needed:</span> {{ $quote->equipment }}</p>
        <p><span class="label">Message:</span> {{ $quote->message }}</p>

        <div class="content">
            <p>If you need to review the request, please log in to your dashboard or contact the customer directly.</p>
        </div>

        <div class="footer">
            <p>Thank you for using our service. <br>
                <a href="https://truk4you.com/">Visit our website</a> for more details.
            </p>
        </div>
    </div>
</body>

</html>
