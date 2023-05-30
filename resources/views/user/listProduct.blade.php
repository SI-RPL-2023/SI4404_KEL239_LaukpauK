@extends('layouts.header')

@section('css')
     <link rel="stylesheet" href="{{ asset('assets/user/css/csslistproduk.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/user/css/index.css') }}">
@endsection

@section('title')
    List Product
@endsection

@section('container')
        <!--NAVBAR-->
        @include('layouts/navbar')

        <!-- bagian atas -->
        <div class="container-fluid">
            <div class="container py-5 color-overlay" style="margin-top:32px;background:linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.63) 100%),url('{{ asset('assets/user/images/listProduct/bg.jpeg') }}');;background-size: 1374px 303px">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center" style="color: white;font-size: 64px;">Today's Favorite</h1>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-12 text-center" style="margin-top: 51px;">
                        <button type="button" class="btn btn-detail btn-outline-light btn-lg text-center">Learn More</button>
                    </div>
                </div> --}}
            </div>
        </div>

        <!-- Products -->
        <div class="container-fluid">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center" style="color:#E7B10A;">Products</h1>
                    </div>
                </div>
                <div class="row" style="margin-top: 25px;">
                    @foreach ($products as $product)
                        <div class="col-3">
                            <div class="card mb-4">
                                <img src="{{ asset('storage/'.$product->gambar_produk) }}" class="card-img-top center" style="margin:10px 10px 0px 10px;width: auto;height: 228px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->nama_produk }}</h5>
                                    <p class="card-text">{{ $product->deskripsi }}</p>
                                    <p class="card-text">Stock: {{ $product->stock }}</p>
                                    <h5 class="card-harga text-center">@currency($product->harga)</h5>
                                    <div class="text-center" style="margin-top:10px;">
                                        <a href="{{ route('detailProduct', ['id' => $product->id]) }}" class="btn btn-detail btn-warning btn-lg {{ $product->stock === 0 ? 'disabled' : '' }}" style="color: white;font-weight: 600;">
                                            {{ $product->stock === 0 ? 'Produk Tidak Tersedia' : 'Detail' }}
                                        </a>
                                    </div>     
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
    <!-- load more -->
    {{-- <div class="container-fluid">
        <div class="container" style="margin-top: 25px;margin-bottom: 25px;">
            <div class="row">
                <div class="col-12 text-center">
                    <button type="button" class="btn btn-detail btn-outline-warning btn-lg">Load More</button>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="" style="position: sticky; top:100%;">
        {{-- FOOTER --}}
        @include('layouts.footer')
    </div>
    
@endsection

