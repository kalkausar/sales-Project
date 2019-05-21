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
                <textarea id="about_content" name="about_content" class="form-control">{{$manages->about_content}}</textarea>
                <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                <script>
                  var options = {
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                  };
                </script>
                <script>
                  CKEDITOR.replace('about_content', options);
                </script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
                <script>
                  $('textarea.about_content').ckeditor(options);
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
