@extends('admin.templateAdmin')
@section('createSlider')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Slider
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"><i class="fa fa-car"></i> Slider</a></li>
      <li class="active">Tambah Slider</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Add Slider Page</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <!-- IMG SLIDER -->
            <div class="form-group">
              <label>Gambar Slider</label>
              <input type="file" class="custom-file-input" id="customFile">
            </div>
            <!-- textarea -->
            <div class="form-group">
              <label>Slider Text</label>
              <textarea class="form-control" rows="3" placeholder="Slider Text"></textarea>
            </div>
            <button type="button" class="btn btn-primary">Submit</a></button>
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
