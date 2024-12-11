<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1f5f9;
            margin: 20px;
        }

        .container {
            background: linear-gradient(135deg, #007bff, #0056b3);
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            padding: 50px;
            max-width: 1000px;
            margin: auto;
            color: #fff;
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-transform: uppercase;
        }

        p {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        p strong {
            display: inline-block;
            min-width: 80px;
        }

        .no-data {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffdddd;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
            color: #fff;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Post Details</h1>
        @if ($data)
            <p><strong>ID:</strong> {{ $data['id'] }}</p>
            <p><strong>Title:</strong> {{ $data['title'] }}</p>
            <p><strong>Body:</strong> {{ $data['body'] }}</p>
        @else 
            <p class="no-data">No data found for this ID.</p>
        @endif
        <footer>Powered by YoungtarNeverBoken API</footer>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
