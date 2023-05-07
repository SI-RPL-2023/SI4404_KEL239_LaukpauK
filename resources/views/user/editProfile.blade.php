@extends('layouts.main-layout')

@section('css')
     <link rel="stylesheet" href="{{ asset('assets/user/css/editprofile.css') }}">
@endsection

@section('title')
    Edit Profile
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
                            <h1 style="font-weight: 500;">Edit Profile</h1>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ '/editProfile/'.$user->id }}" enctype="multipart/form-data">
                                @csrf
                                <!-- Fullname input -->
                                <div class="form-outline mb-3 mt-3">
                                    <label class="form-label" for="fullname" style="font-weight: bold;">Full Name</label>
                                    <input type="text" id="fullname" class="form-control" value="{{ $user->nama_lengkap }}" name="nama_lengkap"/>
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-3 mt-3">
                                    <label class="form-label" for="email" style="font-weight: bold;">Email</label>
                                    <input type="text" id="email" class="form-control" value="{{ $user->email }}" name="email"/>
                                </div>
                                <!-- phonenumber input -->
                                <div class="form-outline mb-3 mt-3">
                                    <label class="form-label" for="phonenumber" style="font-weight: bold;">Phone Number</label>
                                    <input type="text" id="phonenumber" class="form-control" value="{{ $user->nohp }}" name="nohp"/>
                                </div>
                                <!-- address input -->
                                <div class="form-outline mb-3 mt-3">
                                    <label class="form-label" for="address" style="font-weight: bold;">Address</label>
                                    <input type="text" id="address" class="form-control" value="{{ $user->alamat }}" name="alamat"/>
                                </div>
                                <div>
                                    <label class="form-label" for="addPicture" style="font-weight: bold;">Add Picture</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="foto_user" name="foto_user">
                                        {{-- <label class="input-group-text" for="foto_user">Upload</label> --}}
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="d-grid">
                                        <button class="btn btn-warning" type="submit">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection