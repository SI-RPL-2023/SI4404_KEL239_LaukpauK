@extends('layouts.header')

@section('title')
    Status Order
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/user/css/statusOrder.css') }}">
@endsection

@section('container')
    {{-- NAVBAR --}}
    @include('layouts.navbar')

    <!--TITLE-->
    <div class="container-fluid text-center mt-3 p-3">
      <div class="row justify-content-center text-center">
          <center><h4 class="mb-2">Order Status</h4></center>
      </div>
    </div>

    <!--CONTENT-->
    <section>
      <div class="row mb-5">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-10">
            @if (session()->has('addCartSuccess'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('addCartSuccess') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
              <div class="step">
                  <table class="table text-center">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Order Date</th>
                          <th scope="col">Total Price</th>
                          <th scope="col">Bukti Pembayaran</th>
                          <th scope="col">Order Detail</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      @foreach ($orders as $order)
                        <tbody>
                          <tr>
                            <th scope="row">{{ $order->id }}</th>
                            <td>{{ $order->users->nama_lengkap }}</td>
                            <td>{{ \Carbon\Carbon::parse($order->created_at)->format('j F, Y') }}</td>
                            <td>
                              @currency($order->total_price)
                            </td>
                            <td>
                              <a href="{{ asset('storage/'.$order->bukti_bayar) }}" target="_blank">Lihat Bukti</a>
                            </td>
                            <td>
                              <a href="{{ route('orderDetail', ['id' => $order->id]) }}" class="btn btn-modal2" >See Details</a>
                            </td>
                            <td>
                              <button type="button" class="btn btn-success">{{ $order->status }}</button>
                            </td>
                          </tr>
                        </tbody>
                      @endforeach
                    </table>
              </div>
          </div>
          <div class="col-md-2">
          </div>
      </div>
      
    </section>
    
    {{-- FOOTER --}}
    @include('layouts.footer')  

@endsection