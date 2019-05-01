@extends('admin.templateAdmin')
@section('contactAdmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Contact
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Contact</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Contact Page</h3>

            <div class="box-tools pull-right">
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
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <!-- text input phone -->
            <div class="form-group">
              <label>Telepon</label>
              <input type="text" class="form-control" placeholder="Ex: 08xx xxxx xxxx">
            </div>
            <!-- text input fax -->
            <div class="form-group">
              <label>Fax</label>
              <input type="text" class="form-control" placeholder="Ex: 021 xxxxx">
            </div>
            <!-- text input Email -->
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Ex: sales@mitsubishi.com">
            </div>
            <!-- text input Email -->
            <div class="form-group">
              <label>WhatsApp</label>
              <input type="text" class="form-control" placeholder="Ex: 08xx xxxx xxxx">
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
