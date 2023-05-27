@extends('layouts.header')

@section('title')
    Detail Resep
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/user/css/index.css') }}">
@endsection

@section('container')
  
  <!--NAVBAR-->
  @include('layouts.navbar')

  <section class="position-relative py-4 py-xl-5">
      <h1 class="text-start text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;margin-bottom: 7px;padding-left: 170px;">{{ $recipe->judul }}</h1>
      <div class="container position-relative">
          <div class="row">
              <div class="col-md-6 col-xl-4 col-xxl-11" style="width: 1320px;">
                  <div>
                      <form class="p-3 p-xl-4" method="post" style="overflow: auto;">
                          <h6 class="text-dark float-start m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">{{ $recipe->users->nama_lengkap }}</h6>
                          <h6 class="text-dark float-end m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">{{ \Carbon\Carbon::parse($recipe->created_at)->format('j F, Y') }}</h6>
                          
                          <img class="w-100 h-100 fit-cover" src="{{ asset('storage/'.$recipe->gambar_resep) }}" width="1248" height="713" style="margin-top: 16px;">
                          
                          <h6 class="text-dark m-0 fw-bold mt-sm-4" style="margin-left: 15px;padding-left: 12px;font-size: 22px;padding-bottom: 0px;">{!! $recipe->isi_resep !!}</h6>
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