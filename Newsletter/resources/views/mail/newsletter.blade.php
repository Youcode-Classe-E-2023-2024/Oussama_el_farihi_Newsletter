<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Newsletter Update</h2>
        <p>Hello,</p>
        <p>Here's the latest update from our newsletter. We've got some exciting news to share!</p>
        <p><a href="{{ url('/link-to-more-news') }}" class="button">Read More</a></p>
        <p>Thank you for staying with us.</p>
        <p>- The Team</p>
    </div>
</body>
</html>
