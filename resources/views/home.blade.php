@extends('layouts.app')

@section('content')
    
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0" style="background-color:#F9F3DF">
                    <!-- <div class="card-header">Dashboard</div> -->

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (Auth::check())
                            Selamat Datang, {{ Auth::user()->name }} !
                        @else
                            Hello, stranger!
                            <a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a>
                        @endif
                    </div>
                </div>
            </div>
        </div><br>
        <div class="card mb-3">
            <img src="https://www.modestforever.com/pub/media/homepage/slider/d/e/desktop-website-banner-32_3.jpg" class="card-img-top" alt="...">
        </div>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">MuslimahPedia</h1>
        <p class="col-md-8 fs-4">Selamat datang di toko Muslimah Pedia, toko kami menyediakan berbagai macam pakaian muslimah seperti gamis , tunik , celana , kerudung dan pakaian muslim lainnya</p>
        <a class="btn btn-primary btn-lg" href="{{route('products.index')}}">Mulai Belanja</a>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6 mb-4">
        <div class="h-100 p-5 text-white rounded-3" style="background-color: #6867AC;">
          <h2>Voucher Cashback 50%</h2>
          <p>Berlaku untuk semua jenis produk tanpa minimum pembelian. Khusus untuk pembelian pertama.</p>
          <a class="btn btn-outline-light btn-lg" href="{{route('products.index')}}">Mulai Belanja</a>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="h-100 p-5 text-white border rounded-3" style="background-color: #FC28FB;">
          <h2>Dicount Up To 25%</h2>
          <p>Berlaku di website dan toko. Berlaku dari 22 Januari sampai 31 Januari.</p>
          <a class="btn btn-outline-light btn-lg" href="{{route('products.index')}}">Mulai Belanja</a>
        </div>
      </div>
    </div>
    </div>
    <br><br><br>
@endsection
