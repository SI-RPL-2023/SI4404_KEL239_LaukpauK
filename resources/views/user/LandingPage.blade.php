@extends('layouts.main-layout')

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
  <div class="carousel slide py-5 mb-5 hero-header">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
      <div class="container text-left py-5">
          <div class="row justify-content-start">
              <div class="col-lg-8 text-center text-lg-start">
                  <h1 class="fw-bold text-light pb-3">LaukpauK</h1>
                  <h2>Catchphrase web gan</h2>
              </div>
          </div>
      </div>
      </div>
  </div>

  <!--INTRO-->
  <div class="container-fluid text-center mb-5 p-3">
      <div class="row justify-content-center text-center">
          <center><h4 class="mb-2">Introduction</h4></center>
          <div class="col-md-8 text-center">
              <p>Lorem ipsum dolor sit amet consectetur. Condimentum lacinia pulvinar 
              morbi urna adipiscing id quis dolor. Euismod lacinia hendrerit sed 
              diam aliquam ac. Euismod lacinia hendrerit sed diam aliquam ac. 
              Id cum id nulla nulla laoreet in pellentesque.</p>
          </div>
          <div class="col-md-text-center">
              <button type="button" class="btn btn-learn" data-bs-toggle="" data-bs-target="">
                  <h5 class="pt-2 mx-1">Learn More</h5>
              </button>
          </div>
      </div>
  </div>

  <!--ABOUT-->
  <div class="container-fluid mb-5 p-3">
      <div class="row align-items-center">
          <div class="col-md-4 order-2">
              <h4 class="mb-2">About Us</h4>
              <p>Lorem ipsum dolor sit amet consectetur. Condimentum lacinia pulvinar 
                  morbi urna adipiscing id quis dolor. Euismod lacinia hendrerit sed 
                  diam aliquam ac. Euismod lacinia hendrerit sed diam aliquam ac. 
                  Id cum id nulla nulla laoreet in pellentesque.</p>
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
                      <p class="mt-3">orem ipsum dolor sit amet consectetur. Condimentum lacinia pulvinar 
                          morbi urna adipiscing id quis dolor.</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="step">
                      <img src="{{ asset('assets/user/images/landingPage/meats.png') }}" alt="Image" class="img-fluid" width="80%">
                      <p class="mt-3">orem ipsum dolor sit amet consectetur. Condimentum lacinia pulvinar 
                          morbi urna adipiscing id quis dolor.</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="step">
                      <img src="{{ asset('assets/user/images/landingPage/green.png') }}" alt="Image" class="img-fluid" width="80%">
                      <p class="mt-3">orem ipsum dolor sit amet consectetur. Condimentum lacinia pulvinar 
                          morbi urna adipiscing id quis dolor.</p>
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
              <div class="swiper-slide">
                <div class="review text-center">
                  <p class="stars">
                    <span class="bi bi-star-fill"></span>
                    <span class="bi bi-star-fill"></span>
                    <span class="bi bi-star-fill"></span>
                    <span class="bi bi-star-fill"></span>
                    <span class="bi bi-star-fill muted"></span>
                  </p>
                  <h3>So Helpful!</h3>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur. 
                        Condimentum lacinia pulvinar morbi urna adipiscing id quis dolor. 
                        Euismod lacinia hendrerit sed diam aliquam ac. 
                        Id cum id nulla nulla laoreet in pellentesque.</p>
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
                  <h3>Always be my go-to shopping site!</h3>
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur. Condimentum lacinia pulvinar morbi urna adipiscing id quis dolor.
                        Euismod lacinia hendrerit sed diam aliquam ac.
                        Id cum id nulla nulla laoreet in pellentesque.</p>
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