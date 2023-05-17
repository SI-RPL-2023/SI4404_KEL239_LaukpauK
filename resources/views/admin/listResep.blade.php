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

@section('container')

    <body id="page-top">
        <div id="wrapper">
            
            {{-- SIDEBAR --}}
            @include('layouts.sidebar-admin')

            <div class="d-flex flex-column" id="content-wrapper">
                <div class="text-dark" id="content" style="text-align: center;">
                    
                    {{-- NAVBAR --}}
                    @include('layouts.navbar-admin')

                    <h1 class="text-start text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">List Resep</h1>
                    <div class="container-fluid" style="text-align: left;">
                        <a class="btn text-center link-warning" href="{{ route('addResepAdmin') }}" style="background: #e7b10a;margin-bottom: 12px;width: 143.037px;"><span class="text-white" style="font-weight: bold;"><span style="color: rgb(255, 255, 255);">Add Resep</span></span></a>

                        @if (session()->has('saveSuccess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('saveSuccess') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('updateSuccess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('updateSuccess') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        
                        @if (session()->has('deleteSuccess'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('deleteSuccess') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

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
                                                <th class="text-dark" style="text-align: center;width: 106.856px;">Kategori</th>
                                                <th class="text-dark" style="text-align: center;width: 126.038px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($recipes as $recipe)
                                                <tr>
                                                    <td class="text-dark" style="text-align: center;">{{ $recipe->id }}</td>
                                                    <td class="text-dark" style="text-align: center;">{{ $recipe->judul }}<br></td>
                                                    <td style="text-align: center;">
                                                        <picture><img style="text-align: center;width: 133px;" width="116" height="96" src="{{ asset('storage/'.$recipe->gambar_resep) }}"></picture>
                                                    </td>
                                                    <td class="text-dark" style="text-align: center;">{{ $recipe->users->nama_lengkap }}</td>
                                                    <td class="text-dark" style="text-align: center;">{{ $recipe->kategori }}</td>
                                                    <td style="text-align: center;">
                                                            
                                                        <a class="btn link-light text-center link-warning" href="{{ route('editResep', ['slug' => $recipe->slug]) }}" style="background: #e7b10a;margin-bottom: 12px;width: 112.3312px;"><span class="text-white" style="font-weight: bold;">Edit</span>
                                                        </a>

                                                        <a class="btn link-light text-center link-warning" href="{{ route('detailResepAdmin', ['slug' => $recipe->slug]) }}" style="background: #00AE11;margin-bottom: 12px;width: 112.3312px;"><span class="text-white" style="font-weight: bold;">Detail</span>
                                                        </a>

                                                        <form action="{{ route('deleteResep', ['id' => $recipe->id]) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn link-light text-center link-warning" type="submit" style="background: #9d0000;margin-bottom: 12px;width: 112.3312px;">
                                                                <strong>Delete</strong>
                                                            </button>
                                                        </form>
                                                    
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