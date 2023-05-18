@extends('layouts.header')

@section('title')
    List Orders
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
                <div class="text-dark" id="content" style="text-align: center;">

                    {{-- NAVBAR --}}
                    @include('layouts/navbar-admin')
                    
                    <h1 class="text-start text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">List Order</h1>
                    <div class="container-fluid" style="text-align: left;">
                        @if (session()->has('updateStatusSuccess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('updateStatusSuccess') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card shadow">
                            <div class="card-body" style="margin-bottom: 78px;">
                                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th class="text-dark" style="text-align: center;">ID</th>
                                                <th class="text-dark" style="text-align: center;">Name</th>
                                                <th class="text-dark" style="text-align: center;">Order Date</th>
                                                <th class="text-dark" style="text-align: center;">Bukti Pembayaran</th>
                                                <th class="text-dark" style="text-align: center;">Status</th>
                                                <th class="text-dark" style="text-align: center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td class="text-dark" style="text-align: center;">{{ $order->id }}</td>
                                                    <td class="text-dark" style="text-align: center;">{{ $order->users->nama_lengkap }}<br></td>
                                                    <td class="text-dark" style="text-align: center;">{{ \Carbon\Carbon::parse($order->created_at)->format('j F, Y') }}</td>
                                                    <td style="text-align: center;">
                                                        <a href="{{ asset('storage/'.$order->bukti_bayar) }}" target="_blank">Lihat Bukti</a>
                                                    </td>
                                                    <td style="text-align: center;">

                                                        @if ( $order->status === 'Menunggu Konfirmasi' )
                                                            <button class="btn link-light" type="button" style="background: #a4a4a4;margin-bottom: 12px">
                                                                <strong>{{ $order->status }}</strong>
                                                            </button>
                                                        @elseif ( $order->status === 'Diproses' )
                                                            <button class="btn link-light" type="button" style="background: #E7B10A;margin-bottom: 12px">
                                                                <strong>{{ $order->status }}</strong>
                                                            </button>
                                                        @elseif ( $order->status === 'Dikonfirmasi' )
                                                            <button class="btn link-light" type="button" style="background: #E7B10A;margin-bottom: 12px">
                                                                <strong>{{ $order->status }}</strong>
                                                            </button>    
                                                        @elseif ( $order->status === 'Dikirim' )
                                                            <button class="btn link-light" type="button" style="background: #00AE11;margin-bottom: 12px">
                                                                <strong>{{ $order->status }}</strong>
                                                            </button>    
                                                        @elseif ( $order->status === 'Canceled' )
                                                            <button class="btn link-light" type="button" style="background: #FF0000;margin-bottom: 12px">
                                                                <strong>{{ $order->status }}</strong>
                                                            </button>    
                                                        @endif
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a class="btn link-light text-center link-warning" style="background: #FF0000;;width: 112.3312px;" href="{{ route('editOrder', ['id' => $order->id]) }}">
                                                            <span class="text-white" style="font-weight: bold;">Edit</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
