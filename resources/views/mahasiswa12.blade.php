<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa 12</title>
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #d9f0d9, #f5efe6);
            min-height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .card-container {
            background: linear-gradient(145deg, #f5efe6, #d9f0d9);
            padding: 45px 35px;
            border-radius: 25px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
            width: 100%;
            max-width: 550px;
            text-align: center;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .card-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(0,0,0,0.25);
        }

        h1 {
            font-weight: 800;
            font-size: 2.8rem;
            margin-bottom: 35px;
            background: linear-gradient(90deg, #3b5323, #6b4226);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .list-group-item {
            font-weight: 600;
            border-radius: 10px;
            margin-bottom: 15px;
            background: rgba(255,255,255,0.8);
            color: #3b5323;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .list-group-item:hover {
            background: linear-gradient(90deg, #6b4226, #3b5323);
            color: #fff;
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .alert {
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="card-container">
        <h1>Daftar Mahasiswa 12</h1>
        <ol class="list-group list-group-numbered">
            @forelse ($mahasiswa12 as $m)
                <li class="list-group-item">{{ $m }}</li>
            @empty
                <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
            @endforelse
        </ol>
    </div>

</body>
</html>
