@extends('layouts.header')

@section('title')
    Keranjang Belanja
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/user/css/index2.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito&amp;display=swap">
  <link rel="stylesheet" href="{{ asset('assets/user/fonts/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/user/css/Articles-Cards-images.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/user/css/Billing-Table-with-Add-Row--Fixed-Header-Feature.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/user/css/NavBar-with-pictures.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/user/css/QR-Scanner.css')}}">
@endsection

@section('container')
  <!--NAVBAR-->
  @include('layouts.navbar')

  <!--MODAL PAYMENT-->
      <section class="position-relative py-4 py-xl-5" style="margin-bottom: 0px;padding-bottom: 0px;">
          <h1 class="text-center text-warning mb-4 pt-sm-0 mt-sm-0" style="text-align: left;font-weight: bold;font-size: 46.88px;padding-left: 23px;margin-bottom: 7px;">Your Cart</h1>
          <div class="container position-relative">
                <form action="/tambahPesanan" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-xl-4 col-xxl-8">
                            @if (session()->has('deleteCartSuccess'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('deleteCartSuccess') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            
                            <div class="card">
                                <div class="card-body" style="margin-bottom: 78px;">
                                    <div class="table-responsive table mt-2" id="dataTable-2" role="grid" aria-describedby="dataTable_info">
                                        @if ($products->count() > 0)
                                            <table class="table my-0" id="dataTable">
                                                <thead>
                                                    <tr>
                                                        <th class="text-dark" style="text-align: center;width: 146.056px;font-weight: bold;">Gambar Produk</th>
                                                        <th class="text-dark" style="text-align: center;width: 146.056px;font-weight: bold;">Name</th>
                                                        <th class="text-dark" style="text-align: center;margin-right: 1px;width: 75.413px;font-weight: bold;">Price</th>
                                                        <th class="text-dark" style="text-align: center;width: 106.856px;font-weight: bold;">Jumlah</th>
                                                        <th class="text-dark" style="text-align: center;width: 126.038px;font-weight: bold;">Remove</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $product)
                                                        <tr>
                                                            <input type="hidden" name="id_cart" value="{{ $product->id }}">
                                                            <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                                                            <td style="text-align: center;">
                                                                <img style="text-align: center;width: 133px;" width="116" height="96" src="{{ asset('storage/'.$product->products->gambar_produk) }}">
                                                            </td>
                                                            <td class="text-dark" style="text-align: center;">{{ $product->products->nama_produk }}<br></td>
                                                            <td class="text-dark" style="text-align: center;">@currency( $product->products->harga)</td>
                                                            <td class="text-dark" style="text-align: center;">
                                                            <input class="form-control-sm font-sm text-center" type="text" style="border-style: solid;border-color: var(--bs-card-cap-bg);border-top-color: #e7b10a;border-right-color: #e7b10a;border-bottom-color: #e7b10a;border-left-color: #e7b10a;" value="{{ $product->jumlah }}" readonly >
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <a href="{{ route('deleteCart', ['id' => $product->id]) }}">
                                                                    <i class="fas fa-trash fs-1 text-danger" style="font-size: 20px;border-color: rgb(33, 37, 41);"></i>
                                                                </a>
                                                            </td> 
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <p class="text-dark" style="text-align: center;font-weight: bold;">Keranjang kamu masih kosong nih :(</p>
                                        @endif
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-4">                      
                            <div class="card">
                                <div class="card-body" style="margin-bottom: -10px;">
                                    <h6 class="text-dark m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 31px;text-align: left;height: 40.4px;">Cart Summary</h6>
                                    <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                        <table class="table my-0" id="dataTable">
                                            <thead>
                                                <tr></tr>
                                            </thead>
                                            <tbody>
                                                    @foreach ($products as $product)
                                                        <tr>
                                                            <td class="text-dark" style="text-align: left;width: 180.569px;">{{ $product->products->nama_produk }}<br></td>
                                                            <td class="text-dark" style="text-align: right;">@currency( $product->total_price )</td>
                                                        </tr>
                                                    @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr></tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <h6 class="text-dark float-start m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;text-align: left;">Total</h6>
                                    <h6 class="text-dark float-end m-0 fw-bold" style="margin-left: 15px;padding-left: 12px;font-size: 22px;">
                                        @if ($carts->count() === 0)
                                            -
                                        @else
                                            @currency($products->sum("total_price"))
                                        @endif
                                    </h6>
                                </div>
                                <button class="btn btn-modal {{ $carts->count() === 0 ? 'disabled' : '' }}" data-bs-toggle="modal" data-bs-target="#Modal1" type="button" style="background: #e7b10a;font-weight: bold;font-size: 18.8px;margin-top: 32px;">
                                    Buy Now
                                </button>
                                <section class="position-relative" style="margin-bottom: 0px;padding-bottom: 0px;">
                                    <section class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h4 class="modal-title" style="color: #e7b10a;">Payment</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                        <select class="form-select-lg font-sm" style="margin-bottom: 13px;font-weight: bold;text-align: left;width: 146.6px;" id="payment" onchange="val()">
                                                            <option value="QRIS">QRIS</option>
                                                            <option value="Transfer Bank">Transfer Bank</option>
                                                        </select>
                                                    
                                                        <div id="container" class="paymentView">
                                                            <h3 style= "color: rgb(33, 37, 41);">QR Code Scanner </h3>
                                                            <a id="btn-scan-qr">
                                                                <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg">
                                                            </a>
                    
                                                            <h5 class="text-center" style= "color: rgb(33, 37, 41); padding-bottom: 0px;margin-bottom: 13px;">Lauk Pauk</h5>

                                                        </div>

                                                        <div class="bukti-bayar mb-4">
                                                            <label for="bukti_bayar" class="text-dark" style="text-align: center;">Upload Bukti Pembayaran</label>
                                                            <input type="file" name="bukti_bayar" id="bukti_bayar" required>
                                                        </div>

                                                        <input type="hidden" name="total_price" value="{{ $products->sum("total_price") }}">
                                                        
                                                        <div class="modal-footer">
                                                            <button class="btn link-light d-block btn-user w-100" type="submit" style="background: #e7b10a;font-weight: bold;font-size: 18.8px;margin-top: 10px;">Buy</button>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </section>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
      </section>        
  <!--FOOTER-->
  @include('layouts.footer')

    {{-- <script>
        function val() {
            select = document.getElementById("payment")  
            a = document.getElementById("container")  

            if (select.value == 'Transfer Bank') {
                return
            } 

            a.innerHTML = '<p>Test Gan</p>'
        }
    </script> --}}
    
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