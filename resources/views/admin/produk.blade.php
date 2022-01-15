@extends('admin.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Produk</h1>
        </div>
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          {{ Session::get('success') }}
        </div>
      @endif
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-10">    
                <h4>Data Produk</h4>
                </div>
                <div class="col-lg-2">   
                <div class="card-header-action">
                  <a href="#" data-toggle="modal" data-target="#modalPesan" class="btn btn-primary">Tambah Data</a> 
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
                @foreach ($produk as $data)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->kategori }}</td>
                  <td>Rp. {{ $data->harga }}</td>
                  <td>
                    <a class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalDetail{{ $data->id }}" href="#">Detail</a>
                    <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEdit{{ $data->id }}" href="#">Edit</a>
                    <a href="#" data-id="{{ $data->id }}" class="btn btn-danger btn-sm swal-confirm">
                      <form action="{{ route('delete-produk',$data->id)}}" id="delete{{ $data->id }}" method="POST">
                          @csrf
                          @method('delete')
                      </form>
                      Hapus</a>
                  </td>
                </tr>
                 <!-- Modal Detail-->
      <div class="modal fade" id="modalDetail{{ $data->id }}" tabindex="-1" aria-labelledby="modalDetail"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Detail Data Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!--FORM DETAIL PRODUK-->
              <form>
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" disabled value="{{ $data->nama }}">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" class="form-control" disabled value="Rp. {{ $data->harga }}">
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <input type="text" class="form-control" disabled value="{{ $data->kategori }}">
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" disabled>{{ $data->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                  <h5>Foto</h5>
                  <div class="text-center">
                  <img src="{{ asset('/foto/' . $data->foto) }}" alt="" style="width: 100%; height: auto;">
                </div>
                </div>
              </form>
              <!--END FORM DETAIL PRODUK-->
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal Detail-->

      <!-- Modal Edit-->
      <div class="modal fade" id="modalEdit{{ $data->id }}" tabindex="-1" aria-labelledby="modalPesan"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Silahkan Edit Data Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!--FORM EDIT PRODUK-->
            <form action="{{ route('update-produk', $data->id) }}" class="MultiFile-intercepted"
            method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
              </div>
              <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" value="{{ $data->harga }}">
              </div>
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                  @foreach ($kategori as $data)
                  <option>{{ $data->nama }}</option>    
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi">{{ $data->deskripsi }}</textarea>
              </div>
              <div class="form-group">
                <label>Foto</label>
                <input type="file" class="form-control" name="foto">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </form>
            <!--END EDIT PRODUK-->
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal Edit-->
                @endforeach
                
               
              </tbody></table>
            </div>
          </div>
          <div class="card-footer text-right">
            
          </div>
        </div>
        <!-- Modal Tambah-->
        <div class="modal fade" id="modalPesan" tabindex="-1" aria-labelledby="modalPesan"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Silahkan Masukkan Data Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!--FORM TAMBAH PRODUK-->
              <form action="/tambah-produk" class="MultiFile-intercepted"
              method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="nama" value="">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" class="form-control" name="harga">
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="kategori">
                    @foreach ($kategori as $data)
                    <option>{{ $data->nama }}</option>    
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi"></textarea>
                </div>
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" class="form-control" name="foto">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </form>
              <!--END FORM TAMBAH PRODUK-->
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal Tambah-->
    </div>
    <!-- /.container-fluid -->
@endsection

@push('page-scripts')
<script src="{{ asset('adminassets/vendor/sweetalert/sweetalert.min.js')}}"></script>

@endpush

@push('after-scripts')
<script>
$(".swal-confirm").click(function(e) {
    id = e.target.dataset.id;
    swal({
        title: 'Apakah anda yakin?',
        text: 'Data yang dihapus tidak dapat dikembalikan!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            swal('Data berhasil dihapus!', {
            icon: 'success',
            });
        $(`#delete${id}`).submit();
        } else {
            swal('File anda aman!');
        }
      });
  });
</script>
@endpush