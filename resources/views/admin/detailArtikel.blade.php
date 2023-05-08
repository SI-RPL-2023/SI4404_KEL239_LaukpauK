@extends('layouts.header')

@section('title')
    Detail Artikel
@endsection

@section('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/fonts/material-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/Number-Input-Without-Arrow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/NZDropdown---Tree.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/NZDropdown-Singlee.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/x-dropdown.css') }}">
@endsection

@section('container')

    <body id="page-top">
        <div id="wrapper">
            
            {{-- SIDEBAR --}}
            @include('layouts.sidebar-admin')

            <div class="d-flex flex-column" id="content-wrapper">
                <div class="text-dark" id="content" style="text-align: center;">
                    
                    {{-- NAVBAR --}}
                    @include('layouts.navbar-admin')

                    <div class="container-fluid" style="text-align: left;">
                        <div class="card shadow">
                            <form class="p-3 p-xl-4" method="post" style="overflow: auto;">
                                <h6 class="text-dark float-start m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">Dinda Nursari</h6>
                                <h6 class="text-dark float-end m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">26 April 2023</h6><img class="w-100 h-100 fit-cover" src="assets/img/images.jpeg" width="1248" height="713" style="margin-top: 16px;">
                                <div class="mb-3"></div>
                                <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;padding-bottom: 0px;">Berikut adalah 5 masakan Indonesia paling sehat yang dapat Anda coba:<br></h6>
                                <p class="text-start"><br>Gado-gado <br><br>Gado-gado adalah masakan Indonesia yang terbuat dari sayuran segar seperti kacang panjang, bayam, kol, dan tauge yang disajikan dengan bumbu kacang yang kaya protein. Kandungan sayuran segar dan bumbu kacang yang mengandung protein sehat dan vitamin membuat gado-gado menjadi pilihan yang baik untuk menu sehat.<br><br>Sayur lodeh <br><br>Sayur lodeh adalah hidangan sayuran segar seperti nangka muda, kacang panjang, dan tahu yang dimasak dengan santan. Kandungan sayuran dan santan yang rendah lemak membuat sayur lodeh menjadi pilihan makanan sehat.<br><br>Soto ayam <br><br>Soto ayam adalah hidangan sup ayam dengan rempah-rempah Indonesia seperti serai, jahe, dan daun jeruk. Dalam soto ayam terdapat kandungan protein dari daging ayam yang berguna untuk tubuh.<br><br>Pepes ikan <br><br>Pepes ikan adalah hidangan yang terbuat dari ikan yang dibungkus daun pisang dan dibakar. Pepes ikan memiliki kandungan protein dari ikan yang sehat dan rendah kalori.<br><br>Tahu goreng <br><br>Tahu goreng adalah makanan yang terbuat dari kedelai yang digoreng dan biasanya disajikan dengan saus kacang atau saus kecap. Tahu goreng memiliki kandungan protein dan serat yang tinggi serta rendah lemak, membuatnya menjadi pilihan yang sehat untuk camilan atau menu makanan. Namun, pastikan untuk memilih minyak goreng yang sehat dalam menggoreng tahu.</p>
                            </form>
                        </div>
                    </div>
                </div>
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
                    </div>
                </footer>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div>
    </body>
    
@endsection


@section('js')
    <script src="{{ asset('assets/admin/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/theme.js') }}"></script>
@endsection