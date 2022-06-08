<!DOCTYPE html>
<html>
<head>
	<title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/reservasis.css') !!}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="header">
   
        <h1>HOTEL HEBAT</h1>
        <h3>Resepsionis</h3>
    </div>
    <div class="main">
        <div class="fitur">
            <form class="cari" method="get" action="{{ route('searchreservasis') }}">
                <div class="form-group">
                    <input type="text" name="searchreservasis" class="form-control d-inline" placeholder="Cari..." value="{{ request('searchreservasis') }}">
                    <button type="submit" class="btn btn-primary mb-1"></button>
                    <a class="btn btn-danger mb-1" href="{{ route('reservasis.index') }}"></a>
                </div>
                </form>
                <form class="tanggal" method="get" action="{{ route('filterreservasis') }}">
                <div class="form-group">
                    <input type="date" name="filterreservasis" class="form-control d-inline" placeholder="Cari..." value="{{ request('filterreservasis') }}">
                    <button type="submit" class="btn btn-primary mb-1"></button>
                    <a class="btn btn-danger mb-1" href="{{ route('reservasis.index') }}"></a>
                </div>
            </form>
        </div>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Tamu</th>
                    <th>Tanggal Check In</th>
                    <th>Tanggal Check Out</th>
                    <th>Status</th>
                </tr>
                @foreach ($reservasis as $reservasi)
                <tr>
                    <td width="100px">{{ ++$i }}</td>
                    <td style="text-align: left;">{{ $reservasi->nama_tamu }}</td>
                    <td width="260px;">{{ $reservasi->tgl_check_in }}</td>
                    <td width="240px;">{{ $reservasi->tgl_check_out }}</td>
                    <td width="150px">
                        @if(date('d-m-Y') < $reservasi['tgl_check_in'])
                        Booking
                        @elseif(date('d-m-Y') >= $reservasi['tgl_check_in'] && date('d-m-Y') < $reservasi['tgl_check_out'])
                        Check In
                        @elseif(date('d-m-Y') >= $reservasi['tgl_check_out'])
                        Check Out
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        {!! $reservasis->links() !!}
    </div>
</body>
</html>