@extends('layouts.main-layout')

@section('css')
     <link rel="stylesheet" href="{{ asset('assets/user/css/login.css') }}">
@endsection

@section('title')
    Login
@endsection

@section('container')
     <section class="bg1">
          <div class="container-fluid mg">
               <div class="row d-flex justify-content-center align-items-center h-100">
                    
                    <div class="col-md-9 col-lg-6 col-xl-5">
                         <img src="{{ asset('assets/user/images/gambarLogin.png') }}" class="img-fluid lg1" alt="Sample image">
                    </div>

                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                         @if (session()->has('registerSuccess'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                   {{ session('registerSuccess') }}
                                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                         @endif

                         @if (session()->has('loginError'))
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                   {{ session('loginError') }}
                                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                         @endif

                         <form action="/login" method="post">
                              @csrf

                              <div
                                   class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                   <h1 style="color:#E7B10A; font-weight:600">Login</h1>
                              </div>

                              <!-- Email input -->
                              <div class="form-outline mb-3 mt-3">
                                   <label class="form-label" for="email">Email</label>
                                   <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" name="email"/>
                                   
                                   @error('email')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                                   @enderror
                              </div>
                              
                              <!-- Password input -->
                              <div>
                                   <label class="form-label" for="password">Password</label>
                                   <div class="input-group mb-3">
                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" name="password">
                                        <button class="btn btn-outline-secondary" id="togglePassword" type="button" id="button-addon2">
                                             <i class="bi bi-eye-slash" id="icon"></i>
                                        </button>

                                        @error('password')
                                             <div class="invalid-feedback">
                                                  {{$message}}
                                             </div>
                                        @enderror
                                   </div>
                              </div>
                              
                              <button type="submit" class="btn btn-lg text-white"
                                   style="padding-left: 2.5rem; padding-right: 2.5rem; background: #E7B10A; font-weight: 600;">Login</button>
                              <p class="small fw-bold mt-3 pt-1 mb-0">Sudah Memiliki Akun? <a href="{{ '/register' }}"
                                        class="link-primary">Register</a></p>

                         </form>
                    </div>
               </div>
          </div>
     </section>

     <script>

          window.addEventListener("DOMContentLoaded", function () {
               const togglePassword = document.querySelector("#togglePassword");

               togglePassword.addEventListener("click", function (e) {
                    // toggle the type attribute
                    const type = password.getAttribute("type") === "password" ? "text" : "password";
                    password.setAttribute("type", type);
                    // toggle the eye / eye slash icon
                    const icon = document.getElementById('icon')
                    icon.classList.toggle("bi-eye");
               });
          });

     </script>
@endsection