<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
        }

        .container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        p.description {
            text-align: center;
            color: #6c757d;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        table {
            margin-top: 20px;
        }

        thead th {
            background-color: #007bff;
            color: #000000;
            text-align: center;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e9ecef;
        }

        td, th {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>User List</h2>
        <p class="description">Below is a list of users retrieved from an external API, including their names, email addresses, and profile pictures.</p>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Avatar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['first_name'] }} {{ $user['last_name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td><img src="{{ $user['avatar'] }}" alt="Avatar" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
