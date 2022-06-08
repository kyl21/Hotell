<!DOCTYPE html>
<html>
<head>
	<title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/fasilitashotels.css') !!}" rel="stylesheet" type="text/css">
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
    <a class="btn btn-primary" href="{{ route('fasilitashotels.create') }}"></a>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Fasilitas</th>
            <th>Keterangan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        @foreach ($fasilitashotels as $fasilitashotel)
        <tr>
            <td>{{ ++$i }}</td>
            <td style="text-align: left;">{{ $fasilitashotel->nama_fasilitas }}</td>
            <td style="text-align: left;">{{ $fasilitashotel->keterangan }}</td>
            <td><img src="/image/{{ $fasilitashotel->image }}" width="100px"></td>
            <td width="130px">
                <form action="{{ route('fasilitashotels.destroy',$fasilitashotel->id) }}" method="POST">
                    <a id="lihat" class="btn btn-info" href="{{ route('fasilitashotels.show',$fasilitashotel->id) }}"></a>
           
                    <a id="edit" class="btn btn-primary" href="{{ route('fasilitashotels.edit',$fasilitashotel->id) }}"></a>
     
                    @csrf
                    @method('DELETE')
        
                    <button id="hapus" type="submit" class="btn btn-danger"></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    
    {!! $fasilitashotels->links() !!}
    </div>
</body>
</html>
