<!-- resources/views/user_profiles.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <!-- Agrega el enlace a Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agrega estilos personalizados -->
    <style>
        body {
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>User Profiles</h1>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Profile ID</th>
                <th>Profile</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userProfiles as $profile)
                <tr>
                    <td>{{ $profile->users_id }}</td>
                    <td>{{ $profile->username }}</td>
                    <td>{{ $profile->profile_id }}</td>
                    <td>{{ $profile->profile }}</td>
                    <td>{{ $profile->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Agrega los scripts de Bootstrap al final del documento -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

