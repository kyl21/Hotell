<!DOCTYPE html>
<html>
<head>
<title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/fasilitas.css') !!}" rel="stylesheet" type="text/css" >
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
</head>
<body>
    <div class="header">
        
        <h1>HOTEL HEBAT</h1>
        <ul>
            <li><a href="{{ url('pemesanans') }}" class="home">Home</a></li>
            <li><a href="{{ url('kamarhotel') }}" class="kamar">Kamar</a></li>
            <li><a href="{{ url('kamarhotel') }}" class="fasilitas">Fasilitas</a></li>
        </ul>
    </div>
    <center>
    <div class="main">
        <table class="muka">
            <tr>
                <td><img src="{!! asset('assets/image/hotelmuka.jpg') !!}"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td><strong>Fasilitas</strong></td>
            </tr>
            <tr>
                <td><img src="{!! asset('assets/image/pool.jpg') !!}"></td>
                <td><img src="{!! asset('assets/image/ballroom.jpg') !!}"></td>
                <td><img src="{!! asset('assets/image/bill.jpg') !!}"></td>
            </tr>
            <tr>
                <td><img src="{!! asset('assets/image/meeting.jpg') !!}"></td>
                <td><img src="{!! asset('assets/image/dinner.jpg') !!}"></td>

            </tr>
        </table>
    </div>
    <center>
</body>
</html>