<!DOCTYPE html>
<html>
<head>
	<title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/pemesananscreate.css') !!}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3>Form Reservasi</h3>
        <a href="{{ url('pemesanans') }}"><img src="{!! asset('assets/image/kembali.png') !!}" width="40px"></a>
    </div>
    <center>
    <div class="main">
        <br>   
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif   
        <form action="{{ route('pemesanans.store') }}" method="POST" enctype="multipart/form-data" style="align: center;">
            @csrf
            <div class="row">
                <div class="kiri">
                <strong style="font-size: 20px; color:#4e73df;">Detail Pemesan</strong>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Pemesan</strong>
                        <input type="text" name="nama_pemesan" class="form-control" placeholder="Nama Pemesan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email</strong>
                        <input type="email" name="email" class="form-control" placeholder="name@example.com">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No Hp</strong>
                        <input type="text" name="no_hp" class="form-control" placeholder="No Hp">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Tamu</strong>
                        <input type="text" name="nama_tamu" class="form-control" placeholder="Nama Tamu">
                    </div>
                </div>
                </div>
                <br></br>
                <div class="kanan">
                <strong style="font-size: 20px; color:#4e73df;">Detail Reservasi</strong>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tipe Kamar</strong>
                        <select class="form-control" name="tipe_kamar">
                            @foreach($kamars as $kamar)
                            <option value="{{$kamar->tipe_kamar}}">{{$kamar->tipe_kamar}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jumlah Kamar</strong>
                        <input type="number" name="jumlah_kamar" class="form-control" placeholder="Jumlah Kamar">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Check In</strong>
                        <input type="date" name="tgl_check_in" class="form-control" placeholder="Tanggal Check In">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Check Out</strong>
                        <input type="date" name="tgl_check_out" class="form-control" placeholder="Tanggal Check Out">
                    </div>
                </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Pesan</button>
                </div>
            </div>
        </form>
    </div>
    </center>
</body>
</html>