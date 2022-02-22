<!DOCTYPE html>
<html>
<head>
    <title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/pemesanans.css') !!}" rel="stylesheet" type="text/css" >
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
</head>
<body>
    <div class="header">
        <img class="hotel" src="{!! asset('assets/image/hotel.png') !!}">
        <h1>HOTEL HEBAT</h1>
        <ul>
            <li><a href="{{ url('pemesanans') }}" class="home">Home</a></li>
            <li><a href="{{ url('kamarhotel') }}" class="kamar">Kamar</a></li>
            <li><a href="{{ url('fasilitas') }}" class="fasilitas">Fasilitas</a></li>
        </ul>
    </div>
    <center>
    <div class="muka">
        <img src="{!! asset('assets/image/hotelmuka.jpg') !!}">
    </div>
    </center>
    <div class="main">
        <div class="side">
            <p>Lepaskan diri Anda ke Hotel Hebat, dikelilingi oleh keindahan pegunungan yang indah, danau, dan sawah menghijau. Nikmati sore yang hangat dengan berenang di kolam renang dengan pemandangan matahari terbenam memukau. Kids Club yang luas menawarkan berbagai fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention Center kami dilengkapi pelayanan lengkap dengan ruang penyelenggaraan konvensi M.I.C.E ataupun mewujudkan acara pernikahan yang mewah.</p>
        </div>
        <div class="bar">
            <a class="btn btn-primary" href="{{ route('pemesanans.create') }}">Reservasi Sekarang !</a>
        </div>
    </div>
</body>
</html>