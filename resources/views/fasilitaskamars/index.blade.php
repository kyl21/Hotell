<!DOCTYPE html>
<html>
<head>
	<title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/fasilitaskamars.css') !!}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <img class="hotel" src="{!! asset('assets/image/hotel.png') !!}">
        <h1>HOTEL HEBAT</h1>
        <h3>Admin</h3>
        <ul>
            <li><a href="{{ url('kamars') }}" class="kamar">Kamar</a></li>
            <li><a href="{{ url('fasilitaskamars') }}" class="fasilitaskamar">Fasilitas Kamar</a></li>
            <li><a href="{{ url('fasilitashotels') }}" class="fasilitashotel">Fasilitas Hotel</a></li>
        </ul>
    </div>
    <div class="main">
        <div class="tambah">
        <a class="btn btn-primary" href="{{ route('fasilitaskamars.create') }}"></a>
        </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tipe Kamar</th>
            <th>Nama Fasilitas</th>
            <th>Action</th>
        </tr>
        @foreach ($fasilitaskamars as $fasilitaskamar)
        <tr>
            <td width="75px">{{ ++$i }}</td>
            <td style="text-align: left;">{{ $fasilitaskamar->tipe_kamar }}</td>
            <td style="text-align: left;">{{ $fasilitaskamar->nama_fasilitas }}</td>
            <td width="130px">
                <form action="{{ route('fasilitaskamars.destroy',$fasilitaskamar->id) }}" method="POST">
                        <a id="lihat" class="btn btn-info" href="{{ route('fasilitaskamars.show',$fasilitaskamar->id) }}"></a>
                        <a id="edit" class="btn btn-primary" href="{{ route('fasilitaskamars.edit',$fasilitaskamar->id) }}"></a>
                    @csrf
                    @method('DELETE')
                        <button id="hapus" type="submit" class="btn btn-danger"></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    
    {!! $fasilitaskamars->links() !!}
    </div>
</body>
</html>
