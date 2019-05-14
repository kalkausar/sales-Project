@extends('admin.templateAdmin')
@section('editSpek')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Spesifikasi
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"><i class="fa fa-server"></i> Spesifikasi</a></li>
      <li class="active">Edit Spesifikasi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Spesifikasi</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="form-group">
              <label>Pilih Jenis Produk</label>
              <select class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <!-- row 1 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Tipe Mesin</label>
                      <div class="form-group">
                        <input type="text" name="tipe_mesin" id="tipe_mesin" class="form-control" placeholder="Tipe Mesin" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Jenis Transmisi</label>
                      <div class="form-group">
                        <input type="text" name="transmisi" id="transmisi" class="form-control" placeholder="Jenis Transmisi" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 2 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Isi Silinder</label>
                      <div class="form-group">
                        <input type="text" name="isi_silinder" id="isi_silinder" class="form-control" placeholder="Isi Silinder" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Rasio Gear 1</label>
                      <div class="form-group">
                        <input type="text" name="rasio1" id="rasio1" class="form-control" placeholder="Alamat" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 3 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Torsi</label>
                      <div class="form-group">
                        <input type="text" name="torsi" id="torsi" class="form-control" placeholder="Torsi" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Rasio Gear 2</label>
                      <div class="form-group">
                        <input type="text" name="rasio2" id="rasio2" class="form-control" placeholder="Rasio Gear 2" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 4 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Bahan Bakar</label>
                      <div class="form-group">
                        <input type="text" name="bahan_bakar" id="bahan_bakar" class="form-control" placeholder="Bahan Bakar" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Rasio Gear 3</label>
                      <div class="form-group">
                        <input type="text" name="rasio3" id="rasio3" class="form-control" placeholder="Rasio Gear 3" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 5 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Kapasitas Tangki</label>
                      <div class="form-group">
                        <input type="text" name="kapasitas_tangki" id="kapasitas_tangki" class="form-control" placeholder="Kapasitas Tangki" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Rasio Gear 4</label>
                      <div class="form-group">
                        <input type="text" name="rasio4" id="rasio4" class="form-control" placeholder="Rasio Gear 4" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 6 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Diameter X Langkah</label>
                      <div class="form-group">
                        <input type="text" name="diameterXlangkah" id="diameterXlangkah" class="form-control" placeholder="Diameter X Langkah" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Rasio Gear 5</label>
                      <div class="form-group">
                        <input type="text" name="rasio5" id="rasio5" class="form-control" placeholder="Rasio Gear 5" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 7 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Daya Maksimum</label>
                      <div class="form-group">
                        <input type="text" name="dayaMax" id="dayaMax" class="form-control" placeholder="Daya Maximum" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Rasio Gear Reverse</label>
                      <div class="form-group">
                        <input type="text" name="rasio_reverse" id="rasio_reverse" class="form-control" placeholder="Rasio Gear Reverse" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 8 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Panjang</label>
                      <div class="form-group">
                        <input type="text" name="panjang" id="panjang" class="form-control" placeholder="Panjang" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Rasio Gear Akhir</label>
                      <div class="form-group">
                        <input type="text" name="rasio_akhir" id="rasio_akhir" class="form-control" placeholder="Rasio Gear Akhir" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 9 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Lebar</label>
                      <div class="form-group">
                        <input type="text" name="lebar" id="lebar" class="form-control" placeholder="Lebar" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Suspensi Depan</label>
                      <div class="form-group">
                        <input type="text" name="suspensi_depan" id="suspensi_depan" class="form-control" placeholder="Suspensi Depan" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 10 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Tinggi</label>
                      <div class="form-group">
                        <input type="text" name="tinggi" id="tinggi" class="form-control" placeholder="Tinggi" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Suspensi Belakang</label>
                      <div class="form-group">
                        <input type="text" name="suspensi_belakang" id="suspensi_belakang" class="form-control" placeholder="Suspensi Belakang" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 11 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Jarak Sumbu (mm)</label>
                      <div class="form-group">
                        <input type="text" name="jarak_sumbu" id="jarak_sumbu" class="form-control" placeholder="Jarak Sumbu" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Rem Depan</label>
                      <div class="form-group">
                        <input type="text" name="rem_depan" id="rem_depan" class="form-control" placeholder="Rem Depan" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 12 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Jarak Pijak Depan</label>
                      <div class="form-group">
                        <input type="text" name="pijak_depan" id="pijak_depan" class="form-control" placeholder="Jarak Pijak Depan" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Rem Belakang</label>
                      <div class="form-group">
                        <input type="text" name="rem_belakang" id="rem_belakang" class="form-control" placeholder="Rem Belakang" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 13 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Jarak Pijak Belakang</label>
                      <div class="form-group">
                        <input type="text" name="pijak_belakang" id="pijak_belakang" class="form-control" placeholder="Jarak Pijak Belakang" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Sistem Rem</label>
                      <div class="form-group">
                        <input type="text" name="sistem_rem" id="sistem_rem" class="form-control" placeholder="Sistem Rem" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 14 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Jarak Terendah</label>
                      <div class="form-group">
                        <input type="text" name="jarak_terendah" id="jarak_terendah" class="form-control" placeholder="Jarak Terendah" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Sistem Penggerak Roda</label>
                      <div class="form-group">
                        <input type="text" name="sistem_penggerak" id="sistem_penggerak" class="form-control" placeholder="Sistem Penggerak Roda" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- row 15 -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <label>Ukuran Ban</label>
                      <div class="form-group">
                        <input type="text" name="ukuran_ban" id="ukuran_ban" class="form-control" placeholder="Ukuran Ban" style="width:200%">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <button class="btn btn-primary" type="submit" id="">Save</a></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
