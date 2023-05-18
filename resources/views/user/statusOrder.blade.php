@extends('layouts.header')

@section('title')
    Status Order
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/user/css/statusOrder.css') }}">
@endsection

@section('container')
    {{-- NAVBAR --}}
    @include('layouts.navbar')

    <!--TITLE-->
    <div class="container-fluid text-center mt-3 p-3">
      <div class="row justify-content-center text-center">
          <center><h4 class="mb-2">Order Status</h4></center>
      </div>
    </div>

    <!--CONTENT-->
    <section>
      <div class="row mb-5">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
              <div class="step">
                  <table class="table text-center">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Order Date</th>
                          <th scope="col">Order Detail</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">123</th>
                          <td>Mark</td>
                          <td>24-03-2023</td>
                          <td><button type="button" class="btn btn-modal2" >See Details</button></td>
                          <td><button type="button" class="btn btn-success">Done</button></td>
                        </tr>
                        <tr>
                          <th scope="row">124</th>
                          <td>Padil</td>
                          <td>24-03-2023</td>
                          <td><button type="button" class="btn btn-modal2" >See Details</button></td>
                          <td><button type="button" class="btn btn-secondary">Waiting</button></td>
                        </tr>
                      </tbody>
                    </table>
              </div>
          </div>
          <div class="col-md-2">
          </div>
      </div>
      
    </section>
    
    {{-- FOOTER --}}
    @include('layouts.footer')  

@endsection