@extends('layouts.header')

@section('title')
    Keranjang Belanja
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/user/css/index2.css') }}">
@endsection

@section('container')
  <!--NAVBAR-->
  @include('layouts.navbar')

  <section class="position-relative py-4 py-xl-5">
      <h1 class="display-1 text-center text-warning float-start mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;margin-bottom: 7px;padding-left: 0px;margin-left: 142px;">Various Recipes</h1>
      <h3 class="display-1 text-center text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;margin-right: 144px;margin-left: 140px;">
            <form action="">
                <button class="btn float-end" type="submit" style="background: #e7b10a;color: var(--bs-black);font-weight: bold;margin-right: 12px;font-size: 17px;width: 136.75px;">Filter Now</button>
            
                <select class="border rounded float-end" style="background: var(--bs-black);color: #e7b10a;margin-right: 30px;height: 39.5px;font-size: 17px;width: 150px;font-weight: bold;text-align: center;" name="kategori">
                    <option value="Buah-Buahan" selected>Buah-Buahan</option>
                    <option value="Sayur">Sayur</option>
                    <option value="Daging">Daging</option>
                </select>&nbsp;
                
            </form>
        </h3>
      <section>
          <div class="container">
              <div class="row product-list dev">
                  @foreach ($recipes as $recipe)
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-top-right">
                        <div class="product-container">
                            
                            <div class="row">
                                <div class="col-md-12"><img class="fit-cover" style="height: 200px;width: 371px;" src="{{ asset('storage/'.$recipe->gambar_resep) }}" width="373" height="200"></div>
                            </div>
                            
                            <h6 style="text-align: center;margin-bottom: 14px;padding-bottom: 4px;margin-top: 18px;font-size: 25px;">{{ $recipe->judul }}</h6>

                            <a class="btn text-center link-warning" style="background: #e7b10a;margin-bottom: 12px;width: 371px;" href="{{ route('detailResepUser', ['slug' => $recipe->slug]) }}">
                                <span class="text-white" style="font-weight: bold;font-size: 18.8px;">Lihat Selengkapnya<br></span>
                            </a>
                            
                        </div>
                    </div>
                @endforeach
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