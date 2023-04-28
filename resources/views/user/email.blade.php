@extends('layouts.main-layout')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/user/css/index.css') }}">
@endsection

@section('title')
Contact Us
@endsection

@section('container')
<!--NAVBAR-->
@include('layouts/navbar')

<!--Contact Us-->
<section class="position-relative py-4 py-xl-5">
     <h1 class="text-center text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">Contact Us</h1>
     <div class="container position-relative">
          <div class="row">
               <h1>Email berhasil terkirim</h1> 
          </div>
     </div>
</section>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>


<!--FOOTER-->
@include('layouts/footer')

@endsection