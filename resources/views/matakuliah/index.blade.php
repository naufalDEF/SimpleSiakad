<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Matakuliah</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Simple Siakad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    <a class="nav-link" href="{{ route('user.index') }}">Users</a>
                    <a class="nav-link" href="{{ route('kelas.index') }}">Kelas</a>
                    <a class="nav-link active" href="{{route('matakuliah.index')}}">Matakuliah</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mb-4">Data Matakuliah</h1>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">Add Matakuliah</a><hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Matakuliah</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @forelse($matakuliah as $key => $matakuliah)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $matakuliah->nama_matakuliah }}</td>
                        <td> 
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="POST">
                                <a href="{{ route('matakuliah.show', $matakuliah->id) }}" class="btn btn-sm btn-info">Detail</a>
                                <a href="{{ route('matakuliah.edit', $matakuliah->id) }}" class="btn btn-sm btn-warning">Update</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <div class="alert alert-danger">
                            Data Matakuliah Belum Ada.
                        </div>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
