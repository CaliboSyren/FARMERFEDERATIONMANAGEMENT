<!DOCTYPE html>
<html>
<head>
    <title>Announcement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }
        .header {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .content {
            margin-top: 20px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9em;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>{{ $announcement['title'] }}</h2>
        </div>
        <div class="content">
            <p>Dear Farmer,</p>
            <p>{{ $announcement['message'] }}</p>
        </div>
        <div class="footer">
            <p>Thank you,<br>The Farmers Federation</p>
        </div>
    </div>
</body>
</html>
