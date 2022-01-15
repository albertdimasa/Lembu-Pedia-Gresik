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
                <h4>Data Kategori</h4>
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
                  <th>Action</th>
                </tr>
                @foreach ($kategori as $data)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->nama }}</td>
                  <td>
                    <a href="#" data-id="{{ $data->id }}" class="btn btn-danger btn-sm swal-confirm">
                      <form action="{{ route('delete-kategori',$data->id)}}" id="delete{{ $data->id }}" method="POST">
                          @csrf
                          @method('delete')
                      </form>
                      Hapus</a>
                  </td>
                </tr>
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
              <h5 class="modal-title">Silahkan Masukkan Data Kategori</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!--FORM TAMBAH KATEGORI-->
              <form action="/tambah-kategori" method="POST" class="needs-validation"
                novalidate="" role="form">
                @csrf
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="nama" value="">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </form>
              <!--END FORM TAMBAH KATEGORI-->
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