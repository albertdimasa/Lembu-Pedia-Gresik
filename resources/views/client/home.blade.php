@extends('client.layouts.app')
@section('content')
    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Sehat & Halal</p>
                            <h1>Lembu Pedia Gresik</h1>
                            <div class="hero-btns">
                                <a href="{{ url('/shop') }}" class="boxed-btn">Lihat Sapi</a>
                                <a href="{{ url('/contact') }}" class="bordered-btn">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h3>Pengiriman Darat</h3>
                            <p>Siap Mengirim Ke Seluruh Jawa</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>Dukungan Penuh</h3>
                            <p>Dapat Dihubungi Saat Jam Kerja</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>Garansi Kesehatan</h3>
                            <p>Penjaminan Mutu Kesehatan Sapi</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->
    <div class="product-section mt-5 mb-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Produk</span> Kami</h3>
                        <p>Produk kami dijamin sehat dan sesuai syariat Islam karena dirawat sepenuh hati serta telah
                            berpengalaman sejak
                            tahun 1998.</p>
                    </div>
                </div>
            </div>

            {{-- Produk --}}

            <div class="row">
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



            <!-- advertisement section -->
            <div class="abt-section mb-100 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="abt-bg">
                                <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ"
                                    class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="abt-text">
                                <p class="top-sub">Sejak Tahun 1998</p>
                                <h3>Lembu Pedia <span class="orange-text">Gresik</span></h3>
                                <p class="text-justify">Kami telah berpengalaman sejak tahun 1998. Memiliki peternakan
                                    sendiri
                                    yang berada di daerah Gresik. Tiap tahunnya mengeluarkan kurang lebih 200 ekor.</p>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat
                            veritatis minus, et labore minima mollitia qui ducimus.</p> --}}
                                <a href="{{ url('/about') }}" class="boxed-btn mt-4">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end advertisement section -->

            <!-- logo carousel -->
            <div class="logo-carousel-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="logo-carousel-inner">
                                <div class="single-logo-item">
                                    <img src="{{ asset('/img/company-logos/1.png') }}" alt="">
                                </div>
                                <div class="single-logo-item">
                                    <img src="{{ asset('/img/company-logos/2.png') }}" alt="">
                                </div>
                                <div class="single-logo-item">
                                    <img src="{{ asset('/img/company-logos/3.png') }}" alt="">
                                </div>
                                <div class="single-logo-item">
                                    <img src="{{ asset('/img/company-logos/4.png') }}" alt="">
                                </div>
                                <div class="single-logo-item">
                                    <img src="{{ asset('/img/company-logos/5.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end logo carousel -->
        </div>
    </div>
@endsection
