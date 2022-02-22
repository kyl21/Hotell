<!DOCTYPE html>
<html>
<head>
    <title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/cetaks.css') !!}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="kanan">
            <img class="hotel" src="{!! asset('assets/image/hotel.png') !!}">
            <h1>HOTEL HEBAT</h1>
        </div>
        <div class="kiri">
            <h3>Bukti Reservasi</h3>
        </div>
    </div>
     <br>
</br>
    <div class="main">
    @foreach ($cetaks as $cetak)
    <table>
        <strong>Detail Pemesan</strong>
        <tr>
            <td width="130px">Nama Pemesan </td>
            <td width="20px"> : </td>
            <td> {{ $cetak->nama_pemesan }}</td>
        </tr>
        <tr>
            <td>Email </td>
            <td> : </td>
            <td> {{ $cetak->email }}</td>
        </tr>
        <tr>
            <td>No HP </td>
            <td> : </td>
            <td> {{ $cetak->no_hp }}</td>
        </tr>
    </table>
        </br>
    <table>
        <strong>Tamu</strong>
        <tr>
            <td width="130px">Nama Tamu </td>
            <td width="20px"> : </td>
            <td> {{ $cetak->nama_tamu }}</td>
        </tr>
    </table>
</br>
    <table class="table table-bordered" id="table">
        <strong>Detail Reservasi</strong>
        <br>
        Tanggal : {{ $cetak->created_at }}
        <tr>
            <th>No</th>
            <th width="300px">Tipe Kamar</th>
            <th>Jumlah Kamar</th>
            <th>Tanggal Check In</th>
            <th>Tanggal Check Out</th>
        </tr>
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $cetak->tipe_kamar }}</td>
            <td>{{ $cetak->jumlah_kamar }}</td>
            <td>{{ $cetak->tgl_check_in }}</td>
            <td>{{ $cetak->tgl_check_out }}</td>
        </tr>
    </table>
    @endforeach
    
    </div>
    <iframe src="#" onload="window.print()"></iframe>
    
</body>
</html>