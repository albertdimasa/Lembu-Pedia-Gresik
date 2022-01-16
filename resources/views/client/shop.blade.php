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
                            <a href="#" data-toggle="modal" data-target="#modalPesan{{ $d->id }}"
                                class="cart-btn"><i class="fas fa-shopping-cart"></i>Pesan Sekarang</a>
                        </div>
                        <!-- Modal Pesan-->
                        <div class="modal fade" id="modalPesan{{ $d->id }}" tabindex="-1"
                            aria-labelledby="modalPesan" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Silahkan Masukkan Data Diri</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!--FORM UPDATE VARIAN-->
                                        <form action="send.php" method="post" target="_blank">
                                            <div class="form-group">
                                                <label for="">Nama</label>
                                                <input type="text" class="form-control" name="nama" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pesanan</label>
                                                <input type="text" class="form-control" value="{{ $d->nama }}"
                                                    disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Harga</label>
                                                <input type="text" class="form-control" value="Rp. @money($d->harga)"
                                                    disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Catatan</label>
                                                <textarea class="form-control" name="catatan"
                                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <input type="hidden" name="noWA" value="6285745974148">
                                            <input type="hidden" name="produk" value="{{ $d->nama }}">
                                            <input type="hidden" name="harga" value="{{ $d->harga }}">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Pesan
                                                Sekarang</button>
                                        </form>
                                        <!--END FORM Pesan-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Pesan-->
                    </div>

                @empty
                    Data Tidak Ada
                @endforelse
            </div>
        </div>
    </div>
    <!-- end products -->


@endsection
