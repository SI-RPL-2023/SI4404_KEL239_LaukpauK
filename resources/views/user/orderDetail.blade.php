@extends('layouts.header')

@section('title')
    Order Detail
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/user/css/orderDetail.css') }}">
@endsection

@section('container')
    {{-- NAVBAR --}}
    @include('layouts.navbar')

    <!--TITLE-->
    <div class="container-fluid text-center mt-3 p-3">
      <div class="row justify-content-center text-center">
          <center><h4 class="mb-2">Order Details</h4></center>
      </div>
    </div>
    
    <!--CONTENT-->
    <section>
        <div class="row mb-5">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="step">
                    <table class="table text-center">
                        <thead>
                          <tr>
                            <th scope="col">Products</th>
                            <th scope="col">Quantity</th>
                          </tr>
                        </thead>
                        @foreach ($order_detail as $detail)
                          <tbody>
                            <tr>
                              <td>{{ $detail->products->nama_produk }}</td>
                              <td>{{ $detail->jumlah }}</td>
                            </tr>
                          </tbody>
                        @endforeach
                      </table>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        
    </section>

    {{-- FOOTER --}}
    @include('layouts.footer')

@endsection