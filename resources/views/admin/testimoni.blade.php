@extends('admin.templateAdmin')
@section('Testimoni')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Testimoni
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Testimoni</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Manage Testimoni</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <a class="btn btn-success" href="testiPageAdmin/createTestimoni" role="button"><i class="fa fa-plus-circle" style="margin-right:5%"></i>Tambah Testimoni</a>
            <h3>Daftar Testimoni</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nama Pelanggan</th>
                  <th scope="col">Pekerjaan</th>
                  <th scope="col">Testimoni</th>
                  <th scope="col" style="margin-left:-10%">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($manages as $manage)
                <tr>
                  <th scope="row">{{$manage->id}}</th>
                  <td>{{$manage->testimoni_name}}</td>
                  <td>{{$manage->testimoni_job}}</td>
                  <td>{{str_limit($manage->testimoni_string)}}</td>
                  <td><span class="label label-default">Aktif</span></td>
                  <form class="" action="/deletetestimoni/{{$manage->id}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="put">
                  <td><button class="btn btn-block btn-danger btn-xs" style="width:100%" type="submit" name="name">Delete</button></td>
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
