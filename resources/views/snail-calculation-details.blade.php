<!DOCTYPE html>
<html>
<head>
    <title>Snail Climb Calculation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
        }
        .back-link a {
            color: #007bff;
            text-decoration: none;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Snail Climb Calculation Details</h1>
        <table>
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Height (meters)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($calculation as $step)
                    <tr>
                        <td>{{ $step['day'] }}</td>
                        <td>{{ $step['height'] }}</td>
                        <td>{{ $step['action'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="back-link">
            <a href="{{ route('snail.form') }}">Back to Result</a>
        </div>
    </div>
</body>
</html>
