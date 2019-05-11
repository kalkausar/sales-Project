@extends('admin.templateAdmin')
@section('createProduk')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <form action="/addproduct" method="post">
  <section class="content-header">
    <h1>
      Tambah Produk
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"><i class="fa fa-car"></i> Produk</a></li>
      <li class="active">Tambah Produk</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Create Product Page</h3>
{{csrf_field()}}
            <!-- <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-wrench"></i></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div> -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <!-- text input -->
            <div class="form-group">
              <label>Nama Produk</label>
              <input type="text" class="form-control" name=product_name id=product_name placeholder="Ex: Mitsubishi Expander">
            </div>
            <!-- textarea -->
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" rows="3" name=product_desc id=product_desc placeholder="Deskripsi produk"></textarea>
            </div>
            <button class="btn btn-primary" type="submit" id="" >Submit</a></button>
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
