@extends('layouts.header')

@section('title')
    Detail Resep
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/user/css/index.css') }}">
@endsection

@section('container')
    {{-- <livewire:counter />  --}}
    @include('layouts.navbar') 

    <div>
        <h1 class="title text-warning" style="margin-top: 43px; margin-left: 100px; font-size: 64px;">Product Detail</h1>
    </div>

    <div class="d-flex row" style="margin-left: 100px;">
        <div class="col-10">
            @if (session()->has('addCartSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('addCartSuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    
    <div class="d-flex mb-5" style="margin-left: 120px;">
        <div class="card" style="width: 450px; height: 100%; margin-left: 100px; margin-top: 40px;">
            <img src="{{ asset('storage/'.$product->gambar_produk) }}">
        </div>
        <div>
            <h1 class="fw-bold" style="margin-top: 180px; margin-left: 74px; font-size: 32px; ">{{ $product->nama_produk }}</h1>
            <h2 class="fw-bold" style="margin-left: 74px; font-size: 32px; ">@currency($product->harga)</h2>
            <p style="margin-left: 74px; font-size: 20px; "> {{ $product->deskripsi }} </p>
            <form action="/addCart" method="post">
                @csrf
                <div class="input-group quantity" style="margin-left: 74px; margin-top: 44px;">
                    <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                        <span class="input-group-text btn btn-warning fw-bold quantity">-</span>
                    </div>
                    <input type="text" style="width: 1px;text-align: center;" class="qty-input form-control" value="1" max="{{ $product->stock }}" name="jumlah">
                    <div class="input-group-append increment-btn" style="cursor: pointer">
                        <span class="input-group-text btn btn-warning fw-bold quantity">+</span>
                    </div>
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <button type="submit" class="btn btn-warning fw-bold" style="width: 190px; margin-left: 26px;">Add to Cart</button>  
                </div>
            </form>
            
        </div>
    </div>
    <div style="margin-bottom:100px">
    </div>"

    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous">
    </script>

    <script>

        $(document).ready(function () {

            $('.increment-btn').click(function (e) {
                e.preventDefault();
                var incre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(incre_value, 10);
                value = isNaN(value) ? 0 : value;
                if(value<{{ $product->stock }}){
                    value++;
                    $(this).parents('.quantity').find('.qty-input').val(value);
                }
        });

        $('.decrement-btn').click(function (e) {
            e.preventDefault();
            var decre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(decre_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value>1){
                value--;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }
        });

        });


    </script>
@endsection
