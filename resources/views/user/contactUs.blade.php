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
      <div class="col-md-6 col-xl-4 col-xxl-7">
        <div>
          @if (session()->has('sendEmailSuccess'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('sendEmailSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <form action="{{ route('send.email') }}" class="p-3 p-xl-4" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label" for="email">Name</label>
              <input class="form-control" type="text" id="email" name="name">
            </div>
            <div class="mb-3">
              <label class="form-label" for="email">Email</label>
              <input class="form-control" type="email" id="email" name="email">
            </div>
            <div class="mb-3">
              <label class="form-label" for="subject">Subject</label>
              <input class="form-control" type="text" id="subject" name="subject">
            </div>
            <div class="mb-3">
              <label class="form-label" for="message">Message</label>
              <textarea class="form-control" id="message" name="isi_pesan" rows="6"></textarea>
            </div>
            <div class="text-center mb-3">
              <button class="btn btn-primary" type="submit" style="width: 606px;background: #e7b10a;font-family: Nunito, sans-serif;height: 40px;font-size: 18px;"><strong>Submit</strong>
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col"><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.307454332919!2d107.62949671471324!3d-6.973006994962529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sTelkom%20University!5e0!3m2!1sen!2sid!4v1680718748017!5m2!1sen!2sid" width="100%" height="100%"></iframe></div>
    </div>
  </div>
</section>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>


<!--FOOTER-->
@include('layouts/footer')

@endsection