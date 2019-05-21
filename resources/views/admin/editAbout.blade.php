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
            <!-- input-->
            <form class="" action="/aboutPageAdmin/{{$manages->id}}/edit" method="post">
              {{csrf_field()}}
              <div class="form-group">
                <label>Konten About</label>
                <textarea name="about_content">{{$manages->about_content}}</textarea>
                <script>
                  CKEDITOR.replace('about_content');
                </script>
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
</div>
<!-- /.row -->


@endsection
