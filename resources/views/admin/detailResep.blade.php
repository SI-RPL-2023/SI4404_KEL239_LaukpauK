@extends('layouts.header')

@section('title')
    Detail Resep
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
                                <h6 class="text-dark float-end m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">26 April 2023</h6><img class="w-100 h-100 fit-cover" src="assets/img/images%20(1).jpeg" width="1248" height="713" style="margin-top: 16px;">
                                <div class="mb-3"></div>
                                <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;padding-bottom: 0px;">Bahan - bahan :<br></h6>
                                <p class="text-start align-self-start">500 gram daging sapi bagian sandung lamur<br>1 liter air<br>2 batang serai, memarkan<br>4 lembar daun salam<br>3 cm lengkuas, memarkan<br>3 buah cengkeh<br>3 butir kapulaga<br>1 sendok teh jintan<br>2 sendok makan bawang goreng<br>3 sendok makan bawang merah goreng<br>2 sendok makan minyak goreng<br>2 sendok teh garam<br>2 sendok teh kaldu sapi bubuk<br>1/2 sendok teh merica bubuk<br>1/2 sendok teh ketumbar bubuk<br>150 gram tepung ketan<br>100 gram kacang tanah, sangrai dan haluskan</p>
                                <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;padding-bottom: 0px;">Cara membuat:<br></h6>
                                <p class="text-start">1. Rebus daging sapi dengan air hingga matang dan empuk. Angkat daging sapi dan potong-potong kecil.<br>2. Tumis bumbu halus (serai, daun salam, lengkuas, cengkeh, kapulaga, jintan) dengan minyak goreng hingga harum.<br>3. Masukkan potongan daging sapi, aduk rata.<br>4. Tambahkan garam, kaldu sapi bubuk, merica bubuk, dan ketumbar bubuk. Aduk rata dan masak hingga bumbu meresap.<br>5. Tuang air kaldu daging sapi hingga merendam daging sapi dan biarkan mendidih kembali. Masak selama 1 jam dengan api kecil hingga kuah kental dan daging sapi empuk.<br>6. Sambil menunggu kuah matang, buatlah buras (ketan kukus) dengan mencampurkan tepung ketan dengan air secukupnya, kemudian kukus hingga matang8. 8 .<br>7. Goreng kacang tanah hingga kecoklatan, kemudian haluskan.<br>8. Sajikan Coto Makassar dengan buras, kacang tanah yang sudah dihaluskan, bawang goreng, dan sambal.</p>
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