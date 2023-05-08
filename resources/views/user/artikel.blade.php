@extends('layouts.header')

@section('title')
    Artikel
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/user/css/index2.css') }}">
@endsection

@section('container')
  <!--NAVBAR-->
  @include('layouts.navbar')

  <section class="position-relative py-4 py-xl-5">
      <h1 class="text-center text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">Many Articles</h1>
      <section>
          <div class="container">
              <div class="row product-list dev">
                  <div class="col-sm-6 col-md-4 product-item animation-element slide-top-right">
                      <div class="product-container">
                          <div class="row">
                              <div class="col-md-12"><img class="fit-cover" style="height: 200px;width: 371px;" src="assets/img/clipboard-image.png" width="373" height="200"></div>
                          </div>
                          <h6 style="text-align: center;margin-bottom: 14px;padding-bottom: 4px;margin-top: 18px;font-size: 21px;">Cara Mudah Menerapkan Konsep 4 Sehat 5 Sempurna dalam Hidup Sehari-hari</h6><button class="btn text-center" type="button" style="background: #e7b10a;margin-bottom: 12px;width: 371px;text-align: center;"><a class="text-center link-warning" href="Detail%20Artikel.html"><span class="text-center text-white" style="font-weight: bold;font-size: 18.8px;text-align: center;"><span style="color: rgb(255, 255, 255);">Lihat Resep</span></span></a></button>
                      </div>
                      <div class="product-container" style="margin-top: 24px;">
                          <div class="row">
                              <div class="col-md-12"><img class="fit-cover" style="height: 200px;width: 371px;" src="assets/img/clipboard-image-8.png"></div>
                          </div>
                          <h6 style="text-align: center;margin-bottom: 14px;padding-bottom: 4px;margin-top: 18px;font-size: 21px;">Cara Mudah Menerapkan Konsep 4 Sehat 5 Sempurna dalam Hidup Sehari-hari</h6><button class="btn" type="button" style="background: #e7b10a;margin-bottom: 12px;width: 371px;text-align: center;"><a class="text-center link-warning" href="Detail%20Artikel.html"><span class="text-white" style="font-weight: bold;font-size: 18.8px;"><span style="color: rgb(255, 255, 255);">Lihat Resep</span></span></a></button>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-4 product-item animation-element slide-top-right">
                      <div class="product-container">
                          <div class="row">
                              <div class="col-md-12"><img class="fit-cover" style="height: 200px;width: 371px;" src="assets/img/clipboard-image-4.png" width="373" height="200"></div>
                          </div>
                          <h6 style="text-align: center;margin-bottom: 14px;padding-bottom: 4px;margin-top: 18px;font-size: 21px;">Cara Mudah Menerapkan Konsep 4 Sehat 5 Sempurna dalam Hidup Sehari-hari</h6><button class="btn" type="button" style="background: #e7b10a;margin-bottom: 12px;width: 371px;text-align: center;"><a class="text-center link-warning" href="Detail%20Artikel.html"><span class="text-white" style="font-weight: bold;font-size: 18.8px;"><span style="color: rgb(255, 255, 255);">Lihat Resep</span></span></a></button>
                      </div>
                      <div class="product-container" style="margin-top: 24px;">
                          <div class="row">
                              <div class="col-md-12"><img class="fit-cover" style="height: 200px;width: 371px;" src="assets/img/clipboard-image-9.png"></div>
                          </div>
                          <h6 style="text-align: center;margin-bottom: 14px;padding-bottom: 4px;margin-top: 18px;font-size: 21px;">Cara Mudah Menerapkan Konsep 4 Sehat 5 Sempurna dalam Hidup Sehari-hari</h6><button class="btn" type="button" style="background: #e7b10a;margin-bottom: 12px;width: 371px;text-align: center;"><a class="text-center link-warning" href="Detail%20Artikel.html"><span class="text-white" style="font-weight: bold;font-size: 18.8px;"><span style="color: rgb(255, 255, 255);">Lihat Resep</span></span></a></button>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-4 product-item animation-element slide-top-right">
                      <div class="product-container">
                          <div class="row">
                              <div class="col-md-12"><img class="fit-cover" style="height: 200px;width: 371px;" src="assets/img/clipboard-image-5.png"></div>
                          </div>
                          <h6 style="text-align: center;margin-bottom: 14px;padding-bottom: 4px;margin-top: 18px;font-size: 21px;">Cara Mudah Menerapkan Konsep 4 Sehat 5 Sempurna dalam Hidup Sehari-hari</h6><button class="btn" type="button" style="background: #e7b10a;margin-bottom: 12px;width: 371px;text-align: center;"><a class="text-center link-warning" href="Detail%20Artikel.html"><span class="text-white" style="font-weight: bold;font-size: 18.8px;"><span style="color: rgb(255, 255, 255);">Lihat Resep</span></span></a></button>
                      </div>
                      <div class="product-container" style="margin-top: 24px;">
                          <div class="row">
                              <div class="col-md-12"><img class="fit-cover" style="height: 200px;width: 371px;" src="assets/img/clipboard-image-10.png"></div>
                          </div>
                          <h6 style="text-align: center;margin-bottom: 14px;padding-bottom: 4px;margin-top: 18px;font-size: 21px;">Cara Mudah Menerapkan Konsep 4 Sehat 5 Sempurna dalam Hidup Sehari-hari</h6><button class="btn" type="button" style="background: #e7b10a;margin-bottom: 12px;width: 371px;text-align: center;"><a class="text-center link-warning" href="Detail%20Artikel.html"><span class="text-white" style="font-weight: bold;font-size: 18.8px;"><span style="color: rgb(255, 255, 255);">Lihat Resep</span></span></a></button>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </section>

  {{-- FOOTER --}}
  @include('layouts.footer')
@endsection

@section('js')
  {{-- <script src="{{ asset('assets/admin/js/bootstrap.min.js')}}"></script> --}}
  <script src="{{ asset('assets/user/js/bs-init.js') }}"></script>
  <script src="{{ asset('assets/user/js/Billing-Table-with-Add-Row--Fixed-Header-Feature.js') }}"></script>
  <script src="{{ asset('assets/user/js/Dynamically-Add-Remove-Table-Row.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
@endsection