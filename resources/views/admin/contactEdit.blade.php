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
            <form action="/contactPageAdmin/{{ $manages->id }}" method="post">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Bambang" name="contact_name" value="{{ $manages->contact_name }}">
            </div>

            <div class="form-group">
              <label>Jenis</label>
              <input type="text" class="form-control" placeholder="wa" name="contact_type" value="{{ $manages->contact_type }}">
            </div>

            <div class="form-group">
              <label>Jenis</label>
              <input type="text" class="form-control" placeholder="wa" name="contact_desc" value="{{ $manages->contact_desc }}">
            </div>

            <!-- text input fax -->
            <!-- <div class="form-group">
              <label>Fax</label>
              <input type="text" class="form-control" placeholder="Ex: 021 xxxxx">
            </div> -->
            <!-- text input Email -->
            <!-- <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Ex: sales@mitsubishi.com">
            </div> -->
            <!-- text input Email -->
            <!-- <div class="form-group">
              <label>WhatsApp</label>
              <input type="text" class="form-control" placeholder="Ex: 08xx xxxx xxxx">
            </div> -->
            <div class="form-group">
          		<input type="hidden" name="_method" value="put">
          		<input type="hidden" name="_token" value="{{ csrf_token() }}">
          		<button class="btn btn-success" type="submit" id="new"> Edit </button>
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
