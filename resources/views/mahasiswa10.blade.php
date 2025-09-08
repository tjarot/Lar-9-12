<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            padding: 50px;
            margin: 0;
        }
        .card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            width: 400px;
        }
        h1 {
            color: #ffb027;
            text-align: center;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #ffe0b2;
            margin: 10px 0;
            padding: 10px 15px;
            border-radius: 8px;
            color: #222;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Daftar Mahasiswa</h1>
        <ul>
            @foreach($arrMahasiswa as $mahasiswa)
                <li>{{ $mahasiswa }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>

