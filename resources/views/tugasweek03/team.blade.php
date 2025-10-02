<!DOCTYPE html>
<html>
<head>
    <title>Our Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            max-height: 250px;
            width: 100%;
            object-fit: contain;
            padding: 10px;
            border-radius: 12px;
        }
        .card {
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.03);
        }
    </style>
</head>
<body class="container mt-5">
    <h1 class="text-center mb-5">Meet Our Team</h1>

    <div class="row justify-content-center">
        @php
            $team = [
                ['nama' => 'Fadillah Dani Prawoto', 'posisi' => 'Project Manager', 'foto' => 'fadil.jpg'],
                ['nama' => 'Fathi Fathan Fathurrohman N', 'posisi' => 'Backend Developer', 'foto' => 'fathan.jpg'],
                ['nama' => 'Muhamad Hafidz Hazhari', 'posisi' => 'Frontend Developer', 'foto' => 'hapis.jpg'],
            ];
        @endphp

        @foreach ($team as $member)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 text-center">
                    <img src="/img/{{ $member['foto'] }}" class="card-img-top" alt="Foto {{ $member['nama'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $member['nama'] }}</h5>
                        <p class="card-text text-muted">{{ $member['posisi'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>