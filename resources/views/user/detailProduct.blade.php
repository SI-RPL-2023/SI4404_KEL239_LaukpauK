@extends('layouts.header')

@section('title')
    Detail Resep
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/user/css/index2.css') }}">
@endsection

@section('container')
    @include('layouts.navbar')

    <div>
        <h1 class="title text-warning" style="margin-top: 43px; margin-left: 100px; font-size: 64px;">Product Detail</h1>
    </div>
    <div class="d-flex mb-5" style="">
        <div class="card" style="width: 597px; height: 506px; margin-left: 100px; margin-top: 44px;">
            <img src="{{ asset('dummy.png') }}">
        </div>
        <div>
            <h1 class="fw-bold" style="margin-top: 180px; margin-left: 74px; font-size: 32px; ">Paket Sayur Sop</h1>
            <h2 class="fw-bold" style="margin-left: 74px; font-size: 32px; ">Rp.13.500</h2>
            <p style="margin-left: 74px; font-size: 20px; "> Lorem ipsum dolor sit amet consectetur. </p>
            <div class="input-group" style="margin-left: 74px; margin-top: 44px;">
                <button type="button" class="btn btn-warning fw-bold" style="width: 52px;">-</button>
                <input type="text" class="" placeholder="1" style="width: 50px; text-align: center;">
                <button type="button" class="btn btn-warning fw-bold" style="width: 52px;">+</button>
                <div>
                    <button type="button" class="btn btn-warning fw-bold" style="width: 190px; margin-left: 26px;">Add to Cart</button>
                </div>
            </div>
            <h2 class="fw-bold" style="margin-left: 74px; margin-top: 14px; font-size: 20px; ">Share On</h2>
        </div>
    </div>

    @include('layouts.footer')
@endsection
