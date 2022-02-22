<!DOCTYPE html>
<html>
<head>
<title>Hotel Hebat</title>
    <link href="{!! asset('assets/css/kamarhotel.css') !!}" rel="stylesheet" type="text/css" >
    <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{!! asset('assets/image/hotel.png') !!}" type="image/x-icon">
</head>
<body>
    <div class="header">
        <img class="hotel" src="{!! asset('assets/image/hotel.png') !!}">
        <h1>HOTEL HEBAT</h1>
        <ul>
            <li><a href="{{ url('pemesanans') }}" class="home">Home</a></li>
            <li><a href="{{ url('kamarhotel') }}" class="kamar">Kamar</a></li>
            <li><a href="{{ url('fasilitas') }}" class="fasilitas">Fasilitas</a></li>
        </ul>
    </div>
    <center>
    <div class="main">
    <h2>Tipe Kamar Hotel</h2>
    <br>
        <table>
            <tr>
                <td>
                    <img src="{!! asset('assets/image/presidential-suite.jpg') !!}">
                    <h3>Presidential Suite Room</h3>
                    <p>Fasilitas : Luas Kamar 100m2, Living Room, Kitchen, Laundry, Dinnig Room, Private Pool, LED TV 42 Inch, Coffe Maker, Kamar Mandi Bathup & Shower, Kulkas, Kasur King Size, AC, Wifi, Sofa, Breakfast, Dinner</p>
                </td>
                <td>
                    <img src="{!! asset('assets/image/suite.jpg') !!}">
                    <h3>Suite Room</h3>
                    <p>Fasilitas : Luas Kamar 90m2, Living Room, Kitchen, LED TV 40 Inch, Coffe Maker, Kamar Mandi Shower & Bathup Kulkas, Kasur King Size, AC, Wifi, Sofa, Breakfast, Dinner</p>
                </td>
                <td>
                    <img src="{!! asset('assets/image/junior.jpg') !!}">
                    <h3>Junior Suite Room</h3>
                    <p>Fasilitas : Luas Kamar 80m2, Living Room, Kitchen, LED TV 38 Inch, Coffe Maker, Kamar Mandi Shower & Bathup, Kulkas, Kasur King Size, AC, Wifi, Sofa, Breakfast, Dinner</p>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{!! asset('assets/image/deluxe.jpg') !!}">
                    <h3>Deluxe Room</h3>
                    <p>Fasilitas : Luas Kamar 70m2, LED TV 38 Inch, Coffe Maker, Kamar Mandi Bathup & Shower, Kulkas, Kasur Queen Size, AC, Wifi, Sofa, Breakfast, Dinner</p>
                </td>
                <td>
                    <img src="{!! asset('assets/image/superior.jpg') !!}">
                    <h3>Superior Room</h3>
                    <p>Fasilitas : Luas Kamar 60m2, LED TV 32 Inch, Coffe Maker, Kamar Mandi Shower, Kulkas, Kasur Queen Size, AC, Wifi, Breakfast, Dinner</p>
                </td>
                <td>
                    <img src="{!! asset('assets/image/standar.jpg') !!}">
                    <h3>Standard Room</h3>
                    <p>Fasilitas : Luas Kamar 50m2, LED TV 32 Inch, Kamar Mandi Shower, Kasur Standard Size, AC, Wifi, Breakfast, Dinner           makan</p>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{!! asset('assets/image/triple.jpg') !!}">
                    <h3>Triple Room</h3>
                    <p>Fasilitas : Luas Kamar 50m2, LED TV 30 Inch, Kamar Mandi Shower, Kasur Standard & Single Size, AC, Wifi, Breakfast</p>
                </td>
                <td>
                    <img src="{!! asset('assets/image/double.jpg') !!}">
                    <h3>Doule Room</h3>
                    <p>Fasilitas : Luas Kamar 50m2, LED TV 30 Inch, Kamar Mandi Shower, Kasur Double Size, AC, Wifi, Breakfast</p>
                </td>
                <td>
                    <img src="{!! asset('assets/image/twin.jpg') !!}">
                    <h3>Twin Room</h3>
                    <p>Fasilitas : Luas Kamar 50m2, LED TV 30 Inch, Kamar Mandi Shower, 2 Kasur Single Size, AC, Wifi, Breakfast</p>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{!! asset('assets/image/single.jpg') !!}">
                    <h3>Single Room</h3>
                    <p>Fasilitas : Luas Kamar 30m2, LED TV 26 Inch, Kamar Mandi Shower, Kasur single Size, AC, Wifi, Breakfast</p>
                </td>
            </tr>
        </table>
    </div>
    <center>
</body>
</html>