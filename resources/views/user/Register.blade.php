@extends('layouts.header')

@section('css')
     <link rel="stylesheet" href="{{ asset('assets/user/css/Reglog.css') }}">
@endsection

@section('title')
    Register
@endsection

<section class="bg1">
     <div class="container-fluid mt-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="{{ asset('assets/user/images/gambarRegister.png') }}" class="img-fluid lg1" alt="Sample image">
               </div>
               <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="/register" method="post" enctype="multipart/form-data">
                         @csrf

                         <div
                              class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                              <h1 style="color:#E7B10A; font-weight:600">Register</h1>
                         </div>

                         <!-- Email input -->
                         <div class="form-outline mb-3 mt-3">
                              <label class="form-label" for="fullname">Full Name</label>
                              <input type="text" id="fullname" class="form-control @error('nama_lengkap') is-invalid @enderror"
                                   placeholder="Enter your name" name="nama_lengkap" required/>
                              @error('nama_lengkap')
                                   <div class="invalid-feedback">
                                       {{$message}}
                                   </div>
                               @enderror
                         </div>

                         <!-- Email input -->
                         <div class="form-outline mb-3">
                              <label class="form-label" for="emailAddress">Email</label>
                              <input type="email" id="emailAddress" class="form-control @error('email') is-invalid @enderror"
                                   placeholder="Enter your email" name="email" required/>
                              @error('email')
                                   <div class="invalid-feedback">
                                       {{$message}}
                                   </div>
                               @enderror
                         </div>

                         <!-- Nomor Handphone Input -->
                         <div class="form-outline mb-3">
                              <label class="form-label" for="phoneNumber">Phone Number</label>
                              <input type="text" id="phoneNumber" class="form-control @error('nohp') is-invalid @enderror"
                                   placeholder="Enter your phone number" name="nohp" required/>
                              @error('nohp')
                                   <div class="invalid-feedback">
                                       {{$message}}
                                   </div>
                               @enderror
                         </div>

                         <!-- Address-->
                         <div class="form-outline mb-3">
                              <label class="form-label" for="address">Address</label>
                              <input type="text" id="address" class="form-control @error('alamat') is-invalid @enderror"
                                   placeholder="Enter your address" name="alamat" required/>
                              @error('alamat')
                                   <div class="invalid-feedback">
                                       {{$message}}
                                   </div>
                               @enderror
                         </div>

                         <!-- Password-->
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

                         <!-- Password konfirmasi-->
                         <div>
                              <label class="form-label" for="password_confirmation">Password</label>
                              <div class="input-group mb-3">
                                   <input type="password" id="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Confirm your password" name="password_confirmation">
                                   <button class="btn btn-outline-secondary" id="togglePasswordConfirmation" type="button" id="button-addon2">
                                        <i class="bi bi-eye-slash" id="icon2"></i>
                                   </button>

                                   @error('password')
                                        <div class="invalid-feedback">
                                             {{$message}}
                                        </div>
                                   @enderror
                              </div>
                         </div>

                         <div>
                              <label class="form-label" for="addPicture">Add Picture</label>
                              <div class="input-group mb-3">
                                   <input type="file" class="form-control @error('foto_user') is-invalid @enderror" id="foto_user" name="foto_user" required>

                                   @error('foto_user')
                                        <div class="invalid-feedback">
                                             {{$message}}
                                        </div>
                                   @enderror
                              </div>
                         </div>

                         <button type="submit" class="btn btn-lg text-white"
                              style="padding-left: 2.5rem; padding-right: 2.5rem; background: #E7B10A;">Register</button>
                         <p class="small fw-bold mt-3 pt-1 mb-0">Sudah Memiliki Akun? <a href="{{ url('login') }}"
                                   class="link-primary">Login</a></p>
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
               password.setAttribute("type", type)
               // toggle the eye / eye slash icon
               const icon = document.getElementById('icon')
               icon.classList.toggle("bi-eye")
          });

          togglePasswordConfirmation.addEventListener("click", function (e) {
               // toggle the type attribute
               const type = password_confirmation.getAttribute("type") === "password" ? "text" : "password";
               password_confirmation.setAttribute("type", type);
               // toggle the eye / eye slash icon
               const icon2 = document.getElementById('icon2')
               icon2.classList.toggle("bi-eye")
          });
     });
</script>