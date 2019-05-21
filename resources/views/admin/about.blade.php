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
            {{csrf_field()}}
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">About Content</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($manages as $manage)
                <tr>
                  <th scope="row">{{$manage->id}}</th>
                  <td>{{str_limit($manage->about_content)}}</td>
                  <td><span class="label label-default">Aktif</span></td>
                  <td><a class="label label-primary" href="/aboutPageAdmin/{{$manage->id}}">Edit</a></td>
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
</form>
</div>
<!-- /.row -->


@endsection
