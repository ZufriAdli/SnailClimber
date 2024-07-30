<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            max-width: 600px;
            width: 100%;
            padding: 30px;
            background: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            box-sizing: border-box;
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
            font-size: 26px;
            font-weight: 600;
        }
        p {
            font-size: 18px;
            margin: 20px 0;
        }
        a {
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
            border: 1px solid #007bff;
            padding: 12px 24px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculation Result</h1>
        <p>The snail will need <strong>{{ $days }}</strong> days to climb out of the well.</p>
        <a href="{{ route('snail.form') }}">Back to Form</a>
        <br><br>
        <a href="{{ route('snail.calculation.details') }}">View Calculation Details</a>
    </div>
</body>
</html>
