<!DOCTYPE html>
<html>
<head>
	<title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/fasilitaskamarscreate.css') !!}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="header">
    <h3>Tambah Fasilitas Kamar</h3>
        <a href="{{ route('fasilitaskamars.index') }}"><img src="{!! asset('assets/image/kembali.png') !!}" width="40px"></a>
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
        <form action="{{ route('fasilitaskamars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
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
                        <strong>Nama Fasilitas</strong>
                        <select class="form-control" name="nama_fasilitas">
                            @foreach($fasilitashotels as $fasilitashotel)
                            <option value="{{$fasilitashotel->nama_fasilitas}}">{{$fasilitashotel->nama_fasilitas}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    </center>
</body>
</html>