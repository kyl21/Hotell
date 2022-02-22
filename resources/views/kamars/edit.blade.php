<!DOCTYPE html>
<html>
<head>
	<title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/kamarsedit.css') !!}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3>Ubah Detail Kamar</h3>
        <a href="{{ route('kamars.index') }}"><img src="{!! asset('assets/image/kembali.png') !!}" width="40px"></a>
    </div>
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
    <center>
    <div class="main">
    <form action="{{ route('kamars.update',$kamar->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf

        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipe Kamar</strong>
                    <input type="text" name="tipe_kamar" class="form-control" placeholder="Tipe Kamar" value="{{$kamar->tipe_kamar}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Kamar</strong>
                    <input type="number" name="jumlah_kamar" class="form-control" placeholder="Jumlah Kamar" value="{{$kamar->jumlah_kamar}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar</strong>
                    <input type="file" name="image" class="form-control" placeholder="Gambar" style="height: 45px;">
                    <img src="/image/{{ $kamar->image }}" width="300px" style="margin-top:5px;">
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