@extends('layouts.header')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/user/css/index.css') }}">
@endsection

@section('title')
  LaukpauK
@endsection

@section('container')
    <!--NAVBAR-->
  @include('layouts/navbar')
  
  <!--CAROUSEL-->
  <div class="carousel slide mb-5">
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
          <img src="{{ asset('assets/user/images/landingPage/Carosel1.png') }}" class="d-block" alt="LaukpauK">
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="{{ asset('assets/user/images/landingPage/Carosel2.png') }}" class="d-block" alt="Why Healthy Food?">
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="{{ asset('assets/user/images/landingPage/Carosel3.png') }}" class="d-block" alt="Healthy Food">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
  

  <!--INTRO-->
  <div class="container-fluid text-center mb-5 p-3">
      <div class="row justify-content-center text-center">
          <center><h4 class="mb-2">LaukpauK</h4></center>
          <div class="col-md-8 text-center">
              <p>Selamat datang di website kami yang berfokus pada makanan  4 sehat 5 sempurna. Kami percaya bahwa makanan adalah sumber energi penting bagi tubuh, dan bahwa makanan yang sehat adalah kunci untuk menjaga tubuh dalam kondisi yang baik.</p>
          </div>
          <div class="col-md-text-center">
              <a class="btn btn-learn p-3 fs-4 mx-1" href="{{ url('listProduct') }}"><strong>Shop Now</strong></a>
          </div>
      </div>
  </div>

  <!--ABOUT-->
  <div class="container-fluid mb-5 p-3">
      <div class="row align-items-center">
          <div class="col-md-4 order-2">
              <h4 class="mb-2">About Us</h4>
              <p>LaukpauK percaya bahwa memilih makanan yang sehat dan bergizi merupakan kunci utama untuk mencapai kesehatan yang optimal, dan dengan fokus pada prinsip makanan 4 sehat 5 sempurna.
                <br><br>
                LaukpauK tidak hanya menyediakan informasi dan saran mengenai makanan sehat, namun juga menyajikan berbagai resep dan tips memasak yang mudah diikuti, sehingga Anda dapat memperoleh makanan sehat dan lezat untuk dikonsumsi setiap hari.</p>
          </div>
          <div class="col-md-6 text-center" data-aos="fade-right">
              <img src="{{ asset('assets/user/images/landingPage/cook.png') }}" alt="Image" class="img-fluid" width="50%">
          </div>
      </div>
  </div>

  <!--WHY-->
  <div class="container text-center mb-5 p-3">
      <div class="row justify-content-center text-center">
          <div class="row justify-content-center text-center mb-">
              <div class="col-md-8">
                  <center><h4 class="mb-4">Why Choose Us?</h4></center>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  <div class="step">
                      <img src="{{ asset('assets/user/images/landingPage/fruits.png') }}" alt="Image" class="img-fluid" width="80%">
                      <p class="mt-3">Bahan masakan yang segar & fresh untuk dimasak.</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="step">
                      <img src="{{ asset('assets/user/images/landingPage/meats.png') }}" alt="Image" class="img-fluid" width="80%">
                      <p class="mt-3">Harga yang terjangkau 
                        & ramah dikantong.</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="step">
                      <img src="{{ asset('assets/user/images/landingPage/green.png') }}" alt="Image" class="img-fluid" width="80%">
                      <p class="mt-3">Lebih hemat & tidak ribet memilih bahan masakan.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!--CUSTOMER-->
    <div class="row justify-content-center text-center mb-">
        <div class="col-md-8">
            <center><h4 class="mb-3">Our Customer</h4></center>
        </div>
    </div>
    <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              
              <div class="swiper-slide mx-5">
                <div class="review text-center">
                  <p class="stars">
                    <span class="bi bi-star-fill"></span>
                    <span class="bi bi-star-fill"></span>
                    <span class="bi bi-star-fill"></span>
                    <span class="bi bi-star-fill"></span>
                    <span class="bi bi-star-fill muted"></span>
                  </p>
                  <h3>Rekomen, No Debat!</h3>
                  <blockquote>
                    <p>“Mantap banget bumbunya pas dimasak menendang banget kek masakan orang rumah hehehe.“</p>
                  </blockquote>
                  <p class="review-user">
                    <img src="{{ asset('assets/user/images/landingPage/person_1.jpg') }}" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">Suriyanti</span>
                    </span>
                  </p>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="review text-center">
                  <p class="stars">
                    <span class="bi bi-star-fill"></span>
                    <span class="bi bi-star-fill"></span>
                    <span class="bi bi-star-fill"></span>
                    <span class="bi bi-star-fill"></span>
                    <span class="bi bi-star-fill muted"></span>
                  </p>
                  <h3>Wuenak Pol!</h3>
                  <blockquote>
                    <p>“Mantap banget bumbunya pas dimasak menendang banget kek masakan orang rumah hehehe.“</p>
                  </blockquote>
                  <p class="review-user">
                    <img src="{{ asset('assets/user/images/landingPage/person_2.jpg') }}" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">Hamid Rahman</span>
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>

  <!--FOOTER-->
  @include('layouts/footer')
@endsection