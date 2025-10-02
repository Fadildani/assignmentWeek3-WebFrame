<!DOCTYPE html>
<html>
<head>
    <title>Daftar Program</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4">Daftar Program</h2>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID Program</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($program as $item)
                <tr>
                    <td>{{ $item['program'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>