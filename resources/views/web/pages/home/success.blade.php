<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('web.includes.link-up')
</head>
<body>
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <div class="col">
                <img width="30%"src="{{ asset('images/confirm_success.png') }}" alt="">
            </div>
            <div class="col">
                <h3 class="text-warning">Selamat Pendaftaran Berhasil</h3>
                <p class="text-primary">Kami akan segera menghubungi kembali sesuai dengan Nomor Handphone yang telah di daftar</p>
            </div>
            <div class="col">
               <a href="{{ route('beranda') }}" class="btn btn-success mt-5">Kembali ke Website</a>
            </div>
        </div>
    </div>
</body>
</html>