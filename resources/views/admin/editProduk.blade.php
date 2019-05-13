@extends('admin.templateAdmin')
@section('editProduk')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Produk
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"><i class="fa fa-car"></i> Produk</a></li>
      <li class="active">Edit Produk</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Product Page</h3>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <!-- text input -->
            <form class="" action="/produkPageAdmin/{{$manages->id}}/edit" method="post">
              {{csrf_field()}}
              <div class="form-group">
                <label>Gambar Produk</label> <br>
                <img src="{!!$manages->product_image!!}" style="width:50%;height:50%" alt="photo">
              </div>
              <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" class="form-control" name=product_name id=product_name value="{{$manages->product_name}}" placeholder="Ex: Mitsubishi Expander">
              </div>
              <!-- textarea -->
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" rows="3" name=product_desc id=product_desc placeholder="Deskripsi produk">{{$manages->product_desc}}</textarea>
              </div>
              <input type="hidden" name="_method" value="put">
              <button class="btn btn-primary" type="submit" id="">Save</a></button>
            </form>
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
