<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Simple Siakad</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        body {
            background-color: #f8f9fa; /* Background color */
            padding-top: 80px; /* Add padding-top to adjust for the fixed navbar */
        }
        .jumbotron {
            background-color: #1f49a3; /* Jumbotron background color */
            color: #fff; /* Text color */
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
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    <a class="nav-link" href="{{ route('user.index') }}">Users</a>
                    <a class="nav-link" href="{{ route('kelas.index') }}">Kelas</a>
                    <a class="nav-link" href="{{route('matakuliah.index')}}">Matakuliah</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="display-4">Simple Siakad</h1>
        <p class="lead">Aplikasi Administratif Kampus untuk Mahasiswa</p>
    </div>

    <div class="container">
        <h2>Selamat datang di Portal Simple Siakad</h2>
        <p>Simple Siakad adalah platform administratif kampus yang dirancang khusus untuk memenuhi kebutuhan mahasiswa dalam mengelola interaksi administratif mereka dengan kampus. Dari pendaftaran mata kuliah hingga penjadwalan ujian, Simple Siakad menyediakan beragam fitur yang memudahkan mahasiswa untuk mengakses informasi dan menjalankan proses administratif mereka dengan lancar.</p>
        
        <h3>Komitmen Kami</h3>
        <ul>
            <li>Menyediakan layanan administratif yang efisien dan user-friendly untuk mahasiswa</li>
            <li>Memastikan akurasi dan keandalan data mahasiswa</li>
            <li>Memberikan pengalaman pengguna yang nyaman dan mudah diakses</li>
            <li>Mendorong kemajuan akademik mahasiswa melalui pengelolaan yang efisien</li>
        </ul>
        
        <p>Dengan Simple Siakad, mahasiswa dapat dengan mudah mengakses informasi akademik mereka, melacak perkembangan studi, dan mengelola jadwal mereka dengan lebih efektif. Kami berkomitmen untuk terus meningkatkan platform kami agar dapat memenuhi kebutuhan administratif mahasiswa secara lebih baik, sehingga mereka dapat fokus pada pengembangan akademik dan karier mereka.</p>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
