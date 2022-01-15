@extends('client.layouts.app')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresh and Organic</p>
                        <h1>Shop</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="product-section mt-5 mb-5">
        <div class="container">
            <div class="row product-lists">
                @forelse ($data as $d)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="#"><img src="{{ $d->foto }}" alt=""></a>
                            </div>
                            <h3>{{ $d->nama }}</h3>
                            <p class="product-price"><span>{{ $d->deskripsi }}</span>Rp. @money($d->harga) </p>
                            <a href="#" class="cart-btn"><i class="fas fa-shopping-cart"></i>Pesan Sekarang</a>
                        </div>
                    </div>
                @empty
                    Data Tidak Ada
                @endforelse
            </div>
        </div>
    </div>
    <!-- end products -->


@endsection
