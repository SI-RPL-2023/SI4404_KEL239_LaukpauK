@extends('layouts/main-layout')

@section('title')
    Dashboard Admin
@endsection

@section('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/fonts/fontawesome-all.min.copy.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/fonts/material-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/fonts/material-icons.min.copy.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/Number-Input-Without-Arrow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/NZDropdown---Tree.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/NZDropdown-Singlee.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/x-dropdown.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
@endsection

@section('container')
    <div id="wrapper">

        {{-- SIDEBAR --}}
        @include('layouts/sidebar-admin')

        <div class="d-flex flex-column" id="content-wrapper">
            <div class="text-dark" id="content" style="padding-bottom: 39px;margin-bottom: 88px;">
                
                {{-- NAVBAR --}}
                @include('layouts/navbar-admin')

                <h1 class="text-start text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">Dashboard</h1>
                <div class="container-fluid" style="padding-bottom: 0px;margin-bottom: 33px;">
                    <div class="row" style="height: 120.4px;">
                        <div class="col">
                            <div class="card shadow border-start-primary py-2" style="background: var(--bs-black);">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto"><i class="icon ion-ios-pricetags fa-2x text-gray-300" style="font-size: 50px;"></i></div>
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span class="text-white" style="font-size: 22.2px;">Total Order</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span class="text-warning">100</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow border-start-success py-2" style="background: var(--bs-black);">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto" style="height: 75px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor" class="fa-2x text-gray-300" style="font-size: 50px;margin-top: 12px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M171.7 191.1H404.3L322.7 35.07C316.6 23.31 321.2 8.821 332.9 2.706C344.7-3.409 359.2 1.167 365.3 12.93L458.4 191.1H544C561.7 191.1 576 206.3 576 223.1C576 241.7 561.7 255.1 544 255.1L492.1 463.5C484.1 492 459.4 512 430 512H145.1C116.6 512 91 492 83.88 463.5L32 255.1C14.33 255.1 0 241.7 0 223.1C0 206.3 14.33 191.1 32 191.1H117.6L210.7 12.93C216.8 1.167 231.3-3.409 243.1 2.706C254.8 8.821 259.4 23.31 253.3 35.07L171.7 191.1zM191.1 303.1C191.1 295.1 184.8 287.1 175.1 287.1C167.2 287.1 159.1 295.1 159.1 303.1V399.1C159.1 408.8 167.2 415.1 175.1 415.1C184.8 415.1 191.1 408.8 191.1 399.1V303.1zM271.1 303.1V399.1C271.1 408.8 279.2 415.1 287.1 415.1C296.8 415.1 304 408.8 304 399.1V303.1C304 295.1 296.8 287.1 287.1 287.1C279.2 287.1 271.1 295.1 271.1 303.1zM416 303.1C416 295.1 408.8 287.1 400 287.1C391.2 287.1 384 295.1 384 303.1V399.1C384 408.8 391.2 415.1 400 415.1C408.8 415.1 416 408.8 416 399.1V303.1z"></path>
                                            </svg></div>
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span class="text-white" style="font-size: 19.2px;">Total Revenue</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span class="text-warning">10.000.000</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow border-start-warning py-2" style="background: var(--bs-black);">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto" style="height: 75px;">
                                            <i class="fas fa-user-friends fa-2x text-gray-300" style="font-size: 50px;padding-top: 0px;margin-top: 11px;color: var(--bs-black);"></i>
                                        </div>
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span class="text-white" style="font-size: 22.2px;color: var(--bs-card-bg);">Total User</span></div>
                                            <div class="text-warning fw-bold h5 mb-0"><span>150</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="text-start text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">Recent Order</h1>
                <div class="card shadow" style="margin-top: 23px;">
                    <div class="card-body" style="margin-bottom: 78px;margin-top: 32px;">
                        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th class="text-dark" style="text-align: center;margin-right: 1px;width: 118.413px;">ID</th>
                                        <th class="text-dark" style="text-align: center;width: 236.181px;">Name</th>
                                        <th class="text-dark" style="text-align: center;width: 194.856px;">Order Date</th>
                                        <th class="text-dark" style="text-align: center;width: 70.038px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-dark" style="text-align: center;">1297476</td>
                                        <td class="text-dark" style="text-align: center;">Ririnala<br></td>
                                        <td class="text-dark" style="text-align: center;">24-03-2023</td>
                                        <td style="text-align: center;"><button class="btn btn-primary" type="button" style="background: #00AE11;margin-bottom: 12px;width: 112.3312px;"><strong>Done</strong></button><button class="btn btn-primary" type="button" style="background: #878787;margin-bottom: 12px;width: 117.2688px;"><strong>Waiting</strong></button></td>
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
                                        <td class="text-dark" style="text-align: center;">Ririnala</td>
                                        <td class="text-dark" style="text-align: center;">31-03-2023</td>
                                        <td style="text-align: center;"><button class="btn btn-primary" type="button" style="background: #00AE11;margin-bottom: 12px;width: 112.3312px;"><strong>Edit</strong></button><button class="btn btn-primary" type="button" style="background: #878787;margin-bottom: 12px;width: 117.2688px;"><strong>Waiting</strong></button></td>
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection