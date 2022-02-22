<!DOCTYPE html>
<html>
<head>
    <title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/fasilitashotelshow.css') !!}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3>Detail Fasilitas Hotel</h3>
        <a href="{{ route('fasilitashotels.index') }}"><img src="{!! asset('assets/image/kembali.png') !!}" width="40px"></a>
    </div>  
    <br>
    <center>
    <div class="main">
        <div class="isi">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <td><img src="/image/{{ $fasilitashotel->image }}" width="400px"></td>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Fasilitas : </strong>
                {{ $fasilitashotel->nama_fasilitas }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan : </strong>
                <td>{{ $fasilitashotel->keterangan }}</td>
            </div>
        </div>
        </div>
    </div>
</center>
</body>
</html>