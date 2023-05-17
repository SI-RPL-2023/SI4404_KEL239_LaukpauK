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
                                <h1 class="text-start text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">{{ $article->judul }}</h1>

                                <h6 class="text-dark float-start m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">    {{ $article->users->nama_lengkap }}
                                </h6>
                                
                                <h6 class="text-dark float-end m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">{{ \Carbon\Carbon::parse($article->created_at)->format('j F, Y') }}</h6>
                                
                                <img class="w-100 h-100 fit-cover" src="{{ asset('storage/'.$article->gambar_artikel) }}" width="1248" height="713" style="margin-top: 16px;">
                                    <div class="mb-3"></div>
                                <p class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;padding-bottom: 0px;">
                                        {!! $article->isi_artikel !!}
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                @include('layouts.footer-admin')
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div>
    </body>
    
@endsection


@section('js')
    <script src="{{ asset('assets/admin/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/theme.js') }}"></script>
@endsection