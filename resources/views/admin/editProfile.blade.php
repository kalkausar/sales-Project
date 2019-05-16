@extends('admin.templateAdmin')
@section('editProfile')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Profile</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form class="" action="/editProfile/{{Auth::User()->id}}" method="post">
                {{csrf_field()}}
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{Auth::User()->name}}">
              </div>
              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="{{Auth::User()->email}}">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
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
  <!-- </form> -->
</div>
<!-- /.row -->


@endsection
