@extends('admin.templateAdmin')
@section('produk')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Produk
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Produk</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Manage Produk</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <a class="btn btn-success" href="produkPageAdmin/createProduct" role="button"><i class="fa fa-plus-circle" style="margin-right:5%"></i>Tambah Produk</a>
            <h3>Daftar Produk</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nama Produk</th>
                  <th scope="col">Tipe Produk</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($manages as $manage)
                <tr>
                  <th scope="row">{{$manage->id}}</th>
                  <td>{{$manage->product_name}}</td>
                  <td>{{$manage->product_type}}</td>
                  <td>{{$manage->product_desc}}</td>
                  <td><span class="label label-default">Aktif</span></td>
                  <td><a class="label label-primary" href="/produkPageAdmin/{{$manage->id}}">Edit</a></td>
                  <form class="" action="/deleteproduct/{{$manage->id}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="put">
                  <td><button class="btn btn-block btn-danger btn-xs" style="width:50%" type="submit" name="name">Delete</button></td>
                </form>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- ./box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.row -->


@endsection
