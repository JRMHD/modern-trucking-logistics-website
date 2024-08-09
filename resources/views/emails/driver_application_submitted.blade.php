<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Driver Application Submitted</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            background-color: #e74c3c;
            /* Brand red color */
            color: #fff;
            padding: 15px;
            border-radius: 8px 8px 0 0;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
        }

        .content p {
            font-size: 16px;
            margin: 10px 0;
        }

        .content strong {
            color: #e74c3c;
            /* Brand red color */
        }

        .resume-link {
            color: #e74c3c;
            /* Brand red color */
            text-decoration: none;
        }

        .footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border-radius: 0 0 8px 8px;
        }

        .footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Job Application Received</h1>
        </div>
        <div class="content">
            <p>Dear Team,</p>
            <p>We have received a new application for the <strong>Driver</strong> position at
                <strong>TRUCK4YOU</strong>.
            </p>
            <p><strong>Name:</strong> {{ $application->name }}</p>
            <p><strong>License:</strong> {{ $application->license }}</p>
            <p><strong>License Expiration Date:</strong> {{ $application->license_expiration }}</p>
            <p><strong>Endorsements/Restrictions:</strong> {{ $application->endorsements }}</p>
            <p><strong>Preferred Work Schedule/Type:</strong> {{ $application->schedule }}</p>
            <p><strong>Address:</strong> {{ $application->address }}</p>
            <p><strong>Phone:</strong> {{ $application->phone }}</p>
            <p><strong>Email:</strong> {{ $application->email }}</p>
            <p><strong>Experience/History/References:</strong> {{ $application->experience }}</p>
            <p><strong>Role:</strong> {{ $application->role }}</p>
            @if ($application->resume)
                <p><strong>Resume:</strong> <a href="{{ asset('resumes/' . $application->resume) }}"
                        class="resume-link">Download Resume</a></p>
            @endif
            <p>Thank you for your attention to this matter. We will review the application and contact the applicant
                soon.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} TRUCK4YOU. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
