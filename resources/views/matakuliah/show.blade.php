<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Mata Kuliah</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Mata Kuliah</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $matakuliah->nama_matakuliah }}</h5>
                <p class="card-text">ID Mata Kuliah: {{ $matakuliah->id }}</p>
            </div>
        </div><br>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
