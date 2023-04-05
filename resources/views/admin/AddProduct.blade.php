@extends('layouts/main-layout')

@section('title')
    Add Product
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
            @include('layouts/sidebar-admin')
            
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    
                    {{-- NAVBAR --}}
                    @include('layouts/navbar-admin')

                    <section></section>
                    
                    <h1 class="text-start text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">Add Product</h1>
                    <div class="text-warning p-5" style="padding-left: 0px;margin-left: -24px;margin-right: -24px;padding-top: 11px;margin-top: -46px;margin-bottom: 2px;">
                        <div class="text-center"></div>
                        <form class="user" action="{{ route('saveProduct') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3" style="margin-bottom: 142px;margin-left: 1px;margin-right: -1px;">

                                <h6 class="text-dark m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">Nama Produk</h6>
                                <input class="form-control mt-sm-3" type="text" style="font-size: 18px;color: var(--bs-black);" name="nama_produk" required>
                                
                                <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">Harga</h6>
                                <input class="form-control mt-sm-3" type="number" style="font-size: 18px;color: var(--bs-black);" name="harga" min="0" required>
                                
                                <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">Stok</h6>
                                <input class="form-control mt-sm-3" type="number" style="font-size: 18px;color: var(--bs-black);" name="stock" min="0" required>
                                
                                <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">Gambar Produk</h6>
                                <input class="form-control" type="file" style="margin-top: 15px;margin-bottom: 0px;font-size: 18px;" name="gambar_produk" required>
                                
                                <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;margin-top: 7px;padding-top: 0px;font-size: 22px;">Deskripsi</h6>
                                <textarea class="form-control" style="margin-top: 15px;margin-bottom: 25px;font-size: 18px;color: var(--bs-black);" name="deskripsi" required></textarea>
                                
                                <h6 class="text-dark m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;margin-top: -13px;font-size: 22px;">Kategori</h6>
                                <div class="x-dropdown dropdown pe-sm-0 ps-sm-0">
                                    <select class="form-select" style="height: 44px;font-size: 18px;width: 100%;margin-top: 11px;margin-bottom: 32px;padding-top: 0px;padding-bottom: 0px;border-color: rgb(133, 135, 150);color: var(--bs-black);" name="kategori" required>
                                        <option value="Sayur">Sayur</option>
                                        <option value="Daging">Daging</option>
                                    </select>

                                <button class="btn btn-primary link-light d-block btn-user w-100" type="submit" style="background: #e7b10a;font-weight: bold;font-size: 18.8px;">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="card shadow-lg o-hidden border-0 my-5"></div>
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0"></div>
                    </div>
                </div>
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
                    </div>
                </footer>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/admin/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/theme.js') }}"></script>
@endsection