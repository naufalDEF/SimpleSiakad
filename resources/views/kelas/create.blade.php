<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Kelas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Kelas</h1>
        <form action="{{ route('kelas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Kelas:</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
                @error('nama_kelas')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
