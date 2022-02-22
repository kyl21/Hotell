<!DOCTYPE html>
<html>
<head>
    <title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/fasilitaskamarsshow.css') !!}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3>Detail Fasilitas Kamar</h3>
        <a href="{{ route('fasilitaskamars.index') }}"><img src="{!! asset('assets/image/kembali.png') !!}" width="40px"></a>
    </div>
     <br>
    <Center>
    <div class="main">
        <div class="isi">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe Kamar : </strong>
                {{ $fasilitaskamar->tipe_kamar }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Fasilitas : </strong>
                {{ $fasilitaskamar->nama_fasilitas }}
            </div>
        </div>
        </div>
    </div>
    <Center>
</body>
</html>