@extends('admin.templateAdmin')
@section('about')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      About
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">About</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">About Page</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="form-group">
              <label>Gambar About</label>
              <input type="file" class="custom-file-input" id="customFile">
            </div>
            <div class="form-group">
              <label>Kontent About</label>
              <textarea name="AboutTextArea"></textarea>
              <script>
                CKEDITOR.replace('AboutTextArea');
              </script>
            </div>
            <a role="button" class="btn btn-primary">Save</a>
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
