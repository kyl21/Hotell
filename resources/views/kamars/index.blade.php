<!DOCTYPE html>
<html>
<head>
	<title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/kamars.css') !!}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="header">
    
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
            <a class="btn btn-primary" href="{{ route('kamars.create') }}"></a>
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
            <th>Jumlah Kamar</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
        @foreach ($kamars as $kamar)
        <tr>
            <td width="100px">{{ ++$i }}</td>
            <td style="text-align: left;">{{ $kamar->tipe_kamar }}</td>
            <td width="250px">{{ $kamar->jumlah_kamar }}</td>
            <td width="200px"><img src="/image/{{ $kamar->image }}" width="100px"></td>
            <td width="130px">
                <form action="{{ route('kamars.destroy',$kamar->id) }}" method="POST">
                    <div class="lihat">
                        <a class="btn btn-info" href="{{ route('kamars.show',$kamar->id) }}"></a>
                    </div>
                    <div class="ubah">
                        <a class="btn btn-primary" href="{{ route('kamars.edit',$kamar->id) }}"></a>
                    </div>
                    @csrf
                    @method('DELETE')
                    <div class="hapus">
                        <button type="submit" class="btn btn-danger"></button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    
    {!! $kamars->links() !!}
    </div>
</body>
</html>
