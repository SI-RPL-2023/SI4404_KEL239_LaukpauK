@extends('layouts.header')

@section('title')
    Edit Order
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
                    <h1 class="text-start text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">Update Order Status</h1>
                    <div class="text-warning p-5" style="padding-left: 0px;margin-left: -24px;margin-right: -24px;padding-top: 11px;margin-top: -46px;margin-bottom: 2px;">
                        <form class="user" method="post" action="{{ route('updateStatus', ['id' => $order->id]) }}">
                            @csrf
                            <div class="row mb-3" style="margin-bottom: 142px;margin-left: 1px;margin-right: -1px;">
                                <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">ID Order</h6>
                                <input class="form-control" type="number" style="font-size: 18px;color: var(--bs-black);margin-top: 16px;margin-bottom: 16px;" value="{{ $order->id }}" disabled>
                                
                                <h6 class="text-dark m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">Customer Name</h6>
                                <input class="form-control mt-sm-3" type="text" style="font-size: 18px;color: var(--bs-black);" value="{{ $order->users->nama_lengkap }}" disabled>
                                
                                <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">Order Date</h6>
                                
                                <input class="form-control" type="text" style="margin-top: 16px;margin-bottom: 16px;height: 41px;" value="{{ \Carbon\Carbon::parse($order->created_at)->format('j F, Y') }}" disabled>
                                
                                <h6 class="text-dark m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;margin-top: -13px;font-size: 22px;">Status</h6>
                                
                                <div class="x-dropdown dropdown pe-sm-0 ps-sm-0">
                                    <select class="form-select" style="height: 44px;font-size: 18px;width: 100%;margin-top: 11px;margin-bottom: 32px;padding-top: 0px;padding-bottom: 0px;border-color: rgb(133, 135, 150);color: var(--bs-black);" name="status">
                                        <option value="Menunggu Konfirmasi" {{ $order->status === 'Menunggu Konfirmasi' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                                        <option value="Diproses" {{ $order->status === 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                        <option value="Dikirim" {{ $order->status === 'Dikirim' ? 'selected' : '' }}>Dikirim</option>
                                        <option value="Selesai" {{ $order->status === 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                        <option value="Canceled" {{ $order->status === 'Canceled' ? 'selected' : '' }}>Canceled</option>
                                    </select>
                                </div>
                                
                                <button class="btn link-light d-block btn-user w-100" type="submit" style="background: #e7b10a;font-weight: bold;font-size: 18.8px;">Update List Order</button>
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
    </body>    
@endsection

@section('js')
    <script src="{{ asset('assets/admin/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/theme.js') }}"></script>
@endsection