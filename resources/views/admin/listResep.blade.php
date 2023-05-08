@extends('layouts.header')

@section('title')
    Daftar Resep
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

<body id="page-top">
    <div id="wrapper">
        
        {{-- SIDEBAR --}}
        @include('layouts.sidebar-admin')

        <div class="d-flex flex-column" id="content-wrapper">
            <div class="text-dark" id="content" style="text-align: center;">
                
                {{-- NAVBAR --}}
                @include('layouts.navbar-admin')

                <h1 class="text-start text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">List Resep</h1>
                <div class="container-fluid" style="text-align: left;"><button class="btn" type="button" style="background: #e7b10a;margin-bottom: 12px;width: 143.037px;"><a class="text-center link-warning" href="{{ route('addResepAdmin') }}"><span class="text-white" style="font-weight: bold;"><span style="color: rgb(255, 255, 255);">+Add Resep</span></span></a></button>
                    <div class="card shadow">
                        <div class="card-body" style="margin-bottom: 78px;">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-dark" style="text-align: center;margin-right: 1px;width: 75.413px;">ID</th>
                                            <th class="text-dark" style="text-align: center;width: 118.181px;">Name</th>
                                            <th class="text-dark" style="text-align: center;width: 146.056px;">Gambar</th>
                                            <th class="text-dark" style="text-align: center;width: 61.2625px;">Author</th>
                                            <th class="text-dark" style="text-align: center;width: 106.856px;">Stok</th>
                                            <th class="text-dark" style="text-align: center;width: 126.038px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-dark" style="text-align: center;">1297476</td>
                                            <td class="text-dark" style="text-align: center;">Paket Sayur Sop<br></td>
                                            <td style="text-align: center;">
                                                <picture><img style="text-align: center;width: 133px;" width="116" height="96" src="assets/img/images.jpeg"></picture>
                                            </td>
                                            <td class="text-dark" style="text-align: center;">Jeffry Haqiqi</td>
                                            <td class="text-dark" style="text-align: center;">Daging</td>
                                            <td style="text-align: center;">
                                                    
                                                <button class="btn link-light" type="button" style="background: #e7b10a;margin-bottom: 12px;width: 112.3312px;">
                                                    <strong>Edit</strong>
                                                </button>

                                                <br>
                                                
                                                <button class="btn link-light" type="button" style="background: #00AE11;margin-bottom: 12px;width: 112.3312px;">
                                                    <a class="text-center link-warning" href="Detail%20Artikel%20admin.html"><span class="text-white" style="font-weight: bold;">Detail</span>
                                                    </a>
                                                </button>
                                                
                                                <button class="btn link-light" type="button" style="background: #9d0000;margin-bottom: 12px;width: 117.2688px;">
                                                    <strong>Delete</strong>
                                                </button>
                                            
                                            </td>
                                        </tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr>
                                            <td class="text-dark" style="text-align: center;">1297875</td>
                                            <td class="text-dark" style="text-align: center;">Paket Iga Bakar</td>
                                            <td class="text-dark" style="text-align: center;">
                                                <picture><img src="assets/img/images%20(1).jpeg" style="width: 133px;height: 96px;"></picture>
                                            </td>
                                            <td class="text-dark" style="text-align: center;">Ahmad Selbew</td>
                                            <td class="text-dark" style="text-align: center;">sayur</td>
                                            <td style="text-align: center;">
                                                    
                                                <button class="btn link-light" type="button" style="background: #e7b10a;margin-bottom: 12px;width: 112.3312px;">
                                                    <strong>Edit</strong>
                                                </button>

                                                <br>
                                                
                                                <button class="btn link-light" type="button" style="background: #00AE11;margin-bottom: 12px;width: 112.3312px;">
                                                    <a class="text-center link-warning" href="Detail%20Artikel%20admin.html"><span class="text-white" style="font-weight: bold;">Detail</span>
                                                    </a>
                                                </button>
                                                
                                                <button class="btn link-light" type="button" style="background: #9d0000;margin-bottom: 12px;width: 117.2688px;">
                                                    <strong>Delete</strong>
                                                </button>
                                            
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
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

@section('js')
    <script src="{{ asset('assets/admin/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/theme.js') }}"></script>
@endsection