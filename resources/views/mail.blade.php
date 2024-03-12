<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #666;
        }

        .footer {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            font-size: 0.8rem;
            color: #999;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hi, {{ $name }}</h1>
        <p>Sending Mail using Lumen to <strong>{{ $email }}</strong></p>
        <p>This is a simple and cool email template.</p>
        <div class="footer">
            <p>&copy; 2024 Panca. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
