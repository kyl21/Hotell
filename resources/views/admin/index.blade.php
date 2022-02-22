<!DOCTYPE html>
<html>
<head>
    <title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/admin.css') !!}" rel="stylesheet" type="text/css" >
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
</head>
<body>
    <div class="header">
        <img class="hotel" src="{!! asset('assets/image/hotel.png') !!}">
        <h1>HOTEL HEBAT</h1>
    </div>
    <center>
    <div class="muka">
        <img src="{!! asset('assets/image/hotelmuka.jpg') !!}">
    </div>
    <div class="main">
    <a class="btn btn-primary" href="{{ route('kamars.index') }}">Admin</a>
    <br>
    <a class="btn btn-primary" href="{{ route('reservasis.index') }}">Resepsionis</a>
    </div>
    </center>
</body>
</html>