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
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Slider</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td><span class="label label-default">Aktif</span></td>
                  <td><span class="label label-primary" href="#">Edit</span></td>
                  <td><span class="label label-danger" href="#">Delete</span></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td><span class="label label-default">Aktif</span></td>
                  <td><span class="label label-primary" href="#">Edit</span></td>
                  <td><span class="label label-danger" href="#">Delete</span></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td><span class="label label-default">Aktif</span></td>
                  <td><span class="label label-primary" href="#">Edit</span></td>
                  <td><span class="label label-danger" href="#">Delete</span></td>
                </tr>
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
