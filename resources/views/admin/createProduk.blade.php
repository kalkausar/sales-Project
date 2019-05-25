@extends('admin.templateAdmin')
@section('createProduk')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <form action="/addproduct" enctype="multipart/form-data" method="post">
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
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <label> Image </label> <br>
                <label> <b>*Hanya gambar yang dapat dimasukkan </b> </label> <br>
                <input type="file" accept="image/jpeg,image/tiff,image/x-png" id="tes" name="tes">
              </div>

              <!-- image spek -->
              <div class="form-group">
                <label> Gambar Spesifikasi </label> <br>
                <label> <b>*Hanya gambar yang dapat dimasukkan </b> </label> <br>
                <input type="file" accept="image/jpeg,image/tiff,image/x-png" id="tes1" name="tes1">
                <input type="file" accept="image/jpeg,image/tiff,image/x-png" id="tes2" name="tes2">
                <input type="file" accept="image/jpeg,image/tiff,image/x-png" id="tes3" name="tes3">
                <input type="file" accept="image/jpeg,image/tiff,image/x-png" id="tes4" name="tes4">
                <input type="file" accept="image/jpeg,image/tiff,image/x-png" id="tes5" name="tes5">
                <input type="file" accept="image/jpeg,image/tiff,image/x-png" id="tes6" name="tes6">
              </div>
              <!-- end image spek -->

              <!-- text input -->
              <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" class="form-control" name=product_name id=product_name placeholder="Ex: Mitsubishi Expander">
              </div>
              <!-- tipe produk -->

              <div class="form-group">
                <label>Tipe Produk</label>
                <input type="text" class="form-control" name=product_type id=product_type placeholder="Tipe Produk">
              </div>

              <!-- harga produk -->
              <div class="form-group">
                <label>Harga Produk</label>
                <input type="text" class="form-control" name=harga_barang id=harga_barang placeholder="Harga Produk">
              </div>

              <!-- textarea -->
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" rows="3" name=product_desc id=product_desc placeholder="Deskripsi produk"></textarea>
              </div>
              <button class="btn btn-primary" type="submit" id="">Submit</a></button>
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
  </form>
</div>
<!-- /.row -->


@endsection
