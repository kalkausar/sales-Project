@extends('admin.templateAdmin')
@section('createTestimoni')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <form action="/addtestimoni" enctype="multipart/form-data" method="post">
    <section class="content-header">
      <h1>
        Tambah Testimoni
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-car"></i> Testimoni</a></li>
        <li class="active">Tambah Testimoni</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create Testimoni Page</h3>
              {{csrf_field()}}
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <label> Image </label> <br>
                <label> <b>*Hanya gambar yang dapat dimasukkan </b> </label> <br>
                <input type="file" accept="image/jpeg,image/tiff,image/x-png" id="tes" name="tes">
              </div>
              <!-- text input -->
              <div class="form-group">
                <label>Nama Pelanggan</label>
                <input type="text" class="form-control" name=testimoni_name id=testimoni_name>
              </div>
              <!-- tipe produk -->

              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" class="form-control" name=testimoni_job id=testimoni_job>
              </div>

              <!-- textarea -->
              <div class="form-group">
                <label>Isi Testimoni</label>
                <textarea class="form-control" rows="3" name=testimoni_string id=testimoni_string></textarea>
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
