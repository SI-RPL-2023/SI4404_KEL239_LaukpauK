@extends('layouts.main-layout')

@section('css')
     <link rel="stylesheet" href="{{ asset('assets/user/css/profile.css') }}">
@endsection

@section('title')
    My Profile
@endsection

@section('container')
    <!--NAVBAR-->
    
    @include('layouts.navbar')

    <section>
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="card w-60">
                    <div class="container">
                        <div class="text-center mt-4 mb-3">
                            <h1 style="font-weight: 500;">Profile</h1>

                            @if (session()->has('updateSuccess'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('updateSuccess') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                        <div class="mt-4 mb-4">
                            <img src="{{ asset('storage/'.$user->foto_user) }}" alt="" class="rounded mx-auto d-block" width="200px">
                        </div>
                        <div class="card-body">
                            <form>
                                <!-- Fullname input -->
                                <div class="form-outline mb-3 mt-3">
                                    <label class="form-label" for="fullname" style="font-weight: bold;">Full Name</label>
                                    <input type="text" id="fullname" class="form-control" value="{{ $user->nama_lengkap }}" disabled/>
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-3 mt-3">
                                    <label class="form-label" for="email" style="font-weight: bold;">Email</label>
                                    <input type="text" id="email" class="form-control" value="{{ $user->email }}" disabled/>
                                </div>
                                <!-- phonenumber input -->
                                <div class="form-outline mb-3 mt-3">
                                    <label class="form-label" for="phonenumber" style="font-weight: bold;">Phone Number</label>
                                    <input type="text" id="phonenumber" class="form-control" value="{{ $user->nohp }}" disabled/>
                                </div>
                                <!-- address input -->
                                <div class="form-outline mb-3 mt-3">
                                    <label class="form-label" for="address" style="font-weight: bold;">Address</label>
                                    <input type="text" id="address" class="form-control" value="{{ $user->alamat }}" disabled  />
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a class="btn btn-warning" href="{{ route('editProfileView', ['id' => $user->id]) }}" type="button">Edit Profile</a>
                                    {{-- <button class="btn btn-danger" type="button">Logout</button> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection