@extends('layouts.header')

@section('title')
    Edit Artikel
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
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
@endsection

@section('container')

    <body id="page-top">
        <div id="wrapper">

            {{-- SIDEBAR --}}
            @include('layouts.sidebar-admin')

            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">

                    {{-- NAVBAR --}}
                    @include('layouts.navbar-admin')

                    <section></section>
                    <h1 class="text-start text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">Edit Artikel</h1>
                    <div class="text-warning p-5" style="padding-left: 0px;margin-left: -24px;margin-right: -24px;padding-top: 11px;margin-top: -46px;margin-bottom: 2px;">
                        <div class="text-center"></div>

                        <form class="user" method="POST" action="{{ route('updateArticle', ['id' => $article->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3" style="margin-bottom: 142px;margin-left: 1px;margin-right: -1px;">

                                <label for="judul" class="text-dark m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;padding-top: 10px;" class="text-dark m-0 fw-bold mt-sm-4">Judul Artikel</label>
                                <input class="form-control mt-sm-3 @error('judul') is-invalid @enderror" id="judul" type="text" style="font-size: 18px;color: var(--bs-black);margin-bottom: 8px;" name="judul" value="{{ $article->judul }}">
                                
                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                {{-- <label for="slug" class="text-dark m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;padding-top: 10px;" class="text-dark m-0 fw-bold mt-sm-4">Slug</label> --}}
                                <input class="form-control mt-sm-3" id="slug" type="hidden" style="font-size: 18px;color: var(--bs-black);" name="slug" value="{{ $article->slug }}">
                                
                                <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">Gambar Artikel</h6>
                                <input class="form-control" type="file" style="margin-top: 15px;margin-bottom: 0px;font-size: 18px;" name="gambar_artikel">
                                
                                <label for="body" style="margin-left: 15px;padding-left: 12px;margin-top: 7px;padding-top: 0px;font-size: 22px;" class="text-dark m-0 fw-bold mt-sm-4">Isi Artikel</label>
                                @error('isi_artikel')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                                
                                <input id="isi_artikel" type="hidden" name="isi_artikel" value="{{ $article->isi_artikel }}">
                                <trix-editor class="form-control" input="isi_artikel" style="margin-bottom: 25px;font-size: 18px;color: var(--bs-black)">
                                </trix-editor>

                                {{-- <div class="x-dropdown dropdown pe-sm-0 ps-sm-0">
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">xxxxx1</a><a class="dropdown-item" role="presentation" href="#">xxxx2</a><a class="dropdown-item" role="presentation" href="#">xxxxxx3</a></div>
                                </div> --}}

                                <button class="btn link-light d-block btn-user w-100" type="submit" style="background: #e7b10a;font-weight: bold;font-size: 18.8px;">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="card shadow-lg o-hidden border-0 my-5"></div>
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0"></div>
                    </div>
                </div>
                @include('layouts.footer-admin')
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div>
    </body>

    <script>
        
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function () {
            fetch('/admin/addArtikel/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

    </script>
    
@endsection

@section('js')
    <script src="{{ asset('assets/admin/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/theme.js') }}"></script>
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
@endsection