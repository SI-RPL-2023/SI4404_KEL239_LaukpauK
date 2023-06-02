@extends('layouts.header')

@section('title')
    Add Resep
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
                    
                    <h1 class="text-start text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">Add Resep</h1>
                    <div class="text-warning p-5" style="padding-left: 0px;margin-left: -24px;margin-right: -24px;padding-top: 11px;margin-top: -46px;margin-bottom: 2px;">
                        <div class="text-center"></div>
                        <form class="user" method="post" action="{{ route('addResep') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3" style="margin-bottom: 142px;margin-left: 1px;margin-right: -1px;">

                                <label for="judul" class="text-dark m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;padding-top: 10px;" class="text-dark m-0 fw-bold mt-sm-4">Judul Resep</label>
                                <input class="form-control mt-sm-3 @error('judul') is-invalid @enderror" id="judul" type="text" style="font-size: 18px;color: var(--bs-black);margin-bottom: 8px;" name="judul" value="{{ old('judul') }}">
                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <input class="form-control mt-sm-3" id="slug" type="hidden" style="font-size: 18px;color: var(--bs-black);" name="slug" value="{{ old('slug') }}">

                                <label for="kategori" class="text-dark m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;padding-top: 10px;" class="text-dark m-0 fw-bold mt-sm-4">Kategori</label>
                                
                                <select id="kategori" class="form-select" style="height: 44px;font-size: 18px;width: 100%;margin-top: 11px;padding-top: 0px;padding-bottom: 0px;border-color: rgb(133, 135, 150);color: var(--bs-black);margin-bottom: -16px;" name="kategori">
                                    <option value="Daging" selected="">Daging</option>
                                    <option value="Sayur">Sayur</option>
                                    <option value="Buah-buahan">Buah-buahan</option>
                                </select>
                                
                                <label for="file" style="margin-left: 15px;padding-left: 12px;font-size: 22px;padding-top: 10px;" class="text-dark m-0 fw-bold mt-sm-4">Gambar Resep</label>
                                <input id="file" class="form-control @error('gambar_resep') is-invalid @enderror" type="file" style="margin-top: 15px;margin-bottom: 0px;font-size: 18px;" name="gambar_resep">
                                @error('gambar_resep')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                
                                <label for="isi_resep" style="margin-left: 15px;padding-left: 12px;margin-top: 7px;padding-top: 0px;font-size: 22px;" class="text-dark m-0 fw-bold mt-sm-4">Deskripsi Resep</label>
                                @error('isi_resep')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                                
                                <input id="isi_resep" type="hidden" name="isi_resep" value="{{ old('isi_resep') }}">
                                <trix-editor class="form-control" input="isi_resep" style="margin-bottom: 25px;font-size: 18px;color: var(--bs-black)">
                                </trix-editor>
                                
                                <div class="x-dropdown dropdown pe-sm-0 ps-sm-0">
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">xxxxx1</a><a class="dropdown-item" role="presentation" href="#">xxxx2</a><a class="dropdown-item" role="presentation" href="#">xxxxxx3</a></div>
                                </div><button class="btn link-light d-block btn-user w-100" type="submit" style="background: #e7b10a;font-weight: bold;font-size: 18.8px;">Submit</button>
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
            fetch('/admin/addResep/checkSlug?judul=' + judul.value)
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