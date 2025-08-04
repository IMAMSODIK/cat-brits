<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your OTP Code</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 30px;
            color: #333;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 40px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        .otp-code {
            font-size: 32px;
            letter-spacing: 10px;
            font-weight: bold;
            color: #2d89ef;
            margin: 20px 0;
        }

        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #999;
        }

        .btn {
            background-color: #2d89ef;
            color: #fff;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Verify Your Email</h2>
        <p>Hi {{ $name ?? 'User' }},</p>
        <p>Use the following OTP code to complete your registration:</p>

        <div class="otp-code">
            {{ $otp ?? '------' }}
        </div>

        <p>This code will expire in 5 minutes. Please do not share it with anyone.</p>

        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>
    </div>
</body>
</html>
