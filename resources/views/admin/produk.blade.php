@extends('admin.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Produk</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-10">    
                <h4>Data Produk</h4>
                </div>
                <div class="col-lg-2">   
                <div class="card-header-action">
                  <a href="/tambah-data-menu" class="btn btn-primary">Tambah Data</a> 
                </div>
                </div>
                </div>
              </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped table-md">
                <tbody><tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Sapi Ganas</td>
                  <td>Putihan</td>
                  <td>Rp. 15000000</td>
                  <td>
                    <a class="btn btn-secondary btn-sm" href="#">Detail</a>
                    <a class="btn btn-success btn-sm" href="#">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm swal-confirm">
                      Hapus</a>
                  </td>
                </tr>
               
              </tbody></table>
            </div>
          </div>
          <div class="card-footer text-right">
            
          </div>
        </div>
        

    </div>
    <!-- /.container-fluid -->
@endsection