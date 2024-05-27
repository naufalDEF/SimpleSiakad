<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kelas</title>
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
                    <a class="nav-link active" href="{{ route('kelas.index') }}">Kelas</a>
                    <a class="nav-link" href="{{route('matakuliah.index')}}">Matakuliah</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mb-4">Data Kelas</h1>
        <a href="{{ route('kelas.create') }}" class="btn btn-primary">Add Kelas</a><hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kelas</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @forelse($kelas as $key => $kelas)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $kelas->nama_kelas }}</td>
                        <td> 
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kelas.destroy', $kelas->id) }}" method="POST">
                                <a href="{{ route('kelas.show', $kelas->id) }}" class="btn btn-sm btn-info">Detail</a>
                                <a href="{{ route('kelas.edit', $kelas->id) }}" class="btn btn-sm btn-warning">Update</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <div class="alert alert-danger">
                            Data Kelas Belum Ada.
                        </div>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
