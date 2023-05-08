@extends('layouts.header')

@section('title')
    Detail Resep
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/user/css/index2.css') }}">
@endsection

@section('container')
  
  <!--NAVBAR-->
  @include('layouts.navbar')

  <section class="position-relative py-4 py-xl-5">
      <h1 class="text-start text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;margin-bottom: 7px;padding-left: 170px;">Resep Soto Makassar</h1>
      <div class="container position-relative">
          <div class="row">
              <div class="col-md-6 col-xl-4 col-xxl-11" style="width: 1320px;">
                  <div>
                      <form class="p-3 p-xl-4" method="post" style="overflow: auto;">
                          <h6 class="text-dark float-start m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">Dinda Nursari</h6>
                          <h6 class="text-dark float-end m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">26 April 2023</h6><img class="w-100 h-100 fit-cover" src="{{ asset('assets/user/images/resep/images.jpeg') }}" width="1248" height="713" style="margin-top: 16px;">
                          <div class="mb-3"></div>
                          <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;padding-bottom: 0px;">Bahan - bahan :<br></h6>
                          <p class="text-start align-self-start">500 gram daging sapi bagian sandung lamur<br>1 liter air<br>2 batang serai, memarkan<br>4 lembar daun salam<br>3 cm lengkuas, memarkan<br>3 buah cengkeh<br>3 butir kapulaga<br>1 sendok teh jintan<br>2 sendok makan bawang goreng<br>3 sendok makan bawang merah goreng<br>2 sendok makan minyak goreng<br>2 sendok teh garam<br>2 sendok teh kaldu sapi bubuk<br>1/2 sendok teh merica bubuk<br>1/2 sendok teh ketumbar bubuk<br>150 gram tepung ketan<br>100 gram kacang tanah, sangrai dan haluskan</p>
                          <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;padding-bottom: 0px;">Cara membuat:<br></h6>
                          <p class="text-start">1. Rebus daging sapi dengan air hingga matang dan empuk. Angkat daging sapi dan potong-potong kecil.<br>2. Tumis bumbu halus (serai, daun salam, lengkuas, cengkeh, kapulaga, jintan) dengan minyak goreng hingga harum.<br>3. Masukkan potongan daging sapi, aduk rata.<br>4. Tambahkan garam, kaldu sapi bubuk, merica bubuk, dan ketumbar bubuk. Aduk rata dan masak hingga bumbu meresap.<br>5. Tuang air kaldu daging sapi hingga merendam daging sapi dan biarkan mendidih kembali. Masak selama 1 jam dengan api kecil hingga kuah kental dan daging sapi empuk.<br>6. Sambil menunggu kuah matang, buatlah buras (ketan kukus) dengan mencampurkan tepung ketan dengan air secukupnya, kemudian kukus hingga matang8. 8 .<br>7. Goreng kacang tanah hingga kecoklatan, kemudian haluskan.<br>8. Sajikan Coto Makassar dengan buras, kacang tanah yang sudah dihaluskan, bawang goreng, dan sambal.</p>
                      </form>
                  </div>
              </div>
              <div class="w-100"></div>
          </div>
      </div>
  </section>
  
  <div class="row mb-3" style="margin-bottom: 142px;margin-left: 1px;margin-right: -1px;">
      <div class="x-dropdown dropdown pe-sm-0 ps-sm-0">
          <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">xxxxx1</a><a class="dropdown-item" role="presentation" href="#">xxxx2</a><a class="dropdown-item" role="presentation" href="#">xxxxxx3</a></div>
      </div>
  </div>

  <!--FOOTER-->
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