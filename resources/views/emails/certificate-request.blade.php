<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Certificate Request - Truck4You</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #cc0000;
            margin-top: 0;
            border-bottom: 2px solid #cc0000;
            padding-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f8f8f8;
            font-weight: bold;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #777;
            font-size: 14px;
        }

        .map-link {
            color: #cc0000;
            text-decoration: none;
        }

        .map-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>New Certificate Request - Truck4You</h2>
        <p>A new certificate request has been submitted with the following details:</p>
        <table>
            <tr>
                <th>Company Name</th>
                <td>{{ $certificateRequest->company_name }}</td>
            </tr>
            <tr>
                <th>Company Address</th>
                <td>{{ $certificateRequest->company_address }}</td>
            </tr>
            <tr>
                <th>Reason for Request</th>
                <td>{{ $certificateRequest->reason }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $certificateRequest->email }}</td>
            </tr>
            <tr>
                <th>Delivery Email</th>
                <td>{{ $certificateRequest->delivery_email }}</td>
            </tr>
            <tr>
                <th>Limit Requested</th>
                <td>${{ number_format($certificateRequest->limit_requested, 2) }}</td>
            </tr>
            @if ($certificateRequest->dot_number)
                <tr>
                    <th>D.O.T. Number</th>
                    <td>{{ $certificateRequest->dot_number }}</td>
                </tr>
            @endif
            @if ($certificateRequest->latitude && $certificateRequest->longitude)
                <tr>
                    <th>Location</th>
                    <td>
                        Latitude: {{ $certificateRequest->latitude }}, Longitude: {{ $certificateRequest->longitude }}
                        <br>
                        <a href="https://www.google.com/maps?q={{ $certificateRequest->latitude }},{{ $certificateRequest->longitude }}"
                            target="_blank" class="map-link">View on Google Maps</a>
                    </td>
                </tr>
            @endif
            @if ($certificateRequest->special_requests)
                <tr>
                    <th>Special Requests</th>
                    <td>{{ $certificateRequest->special_requests }}</td>
                </tr>
            @endif
        </table>
        <div class="footer">
            &copy; {{ date('Y') }} Truck4You. All rights reserved.
        </div>
    </div>
</body>

</html>
