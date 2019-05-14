@extends('admin.templateAdmin')
@section('spek')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Spesifikasi
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Spesifikasi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Manage Spesifikasi</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <a class="btn btn-success" href="createSpek" role="button"><i class="fa fa-plus-circle" style="margin-right:5%"></i>Tambah Spesifikasi</a>
            <h3>Spesifikasi</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nama Produk</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
            </table>
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
