@extends('frontend.template')
@section('spesifikasi')

<div class="site-blocks-cover inner-page-cover" style="background-image: url('{{$manages->product_image}}');" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
        <h1 class="text-white font-weight-light">Spesifikasi {{$manages->product_name}}</h1>
        <div><a href="/">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Spesifikasi</span></div>
      </div>
    </div>
  </div>
</div>
<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-7 mb-5 bg-white">
        <div class="container" style="padding:5%">
          <h2 class="text-center">Spesifikasi Produk</h2>

          <!-- row1 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Tipe Mesin</p>
            </div>
            <div class="col">
              <p>{!!$manages->tipe_mesin!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Jenis Transmisi</p>
            </div>
            <div class="col">
              <p>{!!$manages->transmisi!!}</p>
            </div>
          </div>
          <!-- row2 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Isi Silinder (cc)</p>
            </div>
            <div class="col">
              <p>{!!$manages->isi_silinder!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Rasio Gigi ke-1</p>
            </div>
            <div class="col">
              <p>{!!$manages->rasio1!!}</p>
            </div>
          </div>
          <!-- row3 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Torsi (Nm/RPM)</p>
            </div>
            <div class="col">
              <p>{!!$manages->torsi!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Rasio Gigi ke-2</p>
            </div>
            <div class="col">
              <p>{!!$manages->rasio2!!}</p>
            </div>
          </div>
          <!-- row4 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Jenis Bahan Bakar</p>
            </div>
            <div class="col">
              <p>{!!$manages->bahan_bakar_jenis!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Rasio Gigi ke-3</p>
            </div>
            <div class="col">
              <p>{!!$manages->rasio3!!}</p>
            </div>
          </div>
          <!-- row5 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Sistem Bahan Bakar</p>
            </div>
            <div class="col">
              <p>{!!$manages->bahan_bakar_sistem!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Rasio Gigi ke-4</p>
            </div>
            <div class="col">
              <p>{!!$manages->rasio4!!}</p>
            </div>
          </div>
          <!-- row6 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Kapasitas Tangki (liter)</p>
            </div>
            <div class="col">
              <p>{!!$manages->kapasitas_tangki!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Rasio Gigi ke-5</p>
            </div>
            <div class="col">
              <p>{!!$manages->rasio5!!}</p>
            </div>
          </div>
          <!-- row7 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Diameter x Langkah (mm x mm)</p>
            </div>
            <div class="col">
              <p>{!!$manages->diameterXlangkah!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Rasio Gigi Reverse</p>
            </div>
            <div class="col">
              <p>{!!$manages->rasio_reverse!!}</p>
            </div>
          </div>
          <!-- row8 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Daya Maksimum (ps/RPM)</p>
            </div>
            <div class="col">
              <p>{!!$manages->dayaMax!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Rasio Gear Akhir</p>
            </div>
            <div class="col">
              <p>{!!$manages->rasio_akhir!!}</p>
            </div>
          </div>
          <!-- row9 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Panjang (mm)</p>
            </div>
            <div class="col">
              <p>{!!$manages->panjang!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Suspensi Depan</p>
            </div>
            <div class="col">
              <p>{!!$manages->suspensi_depan!!}</p>
            </div>
          </div>
          <!-- row10 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Lebar (mm)</p>
            </div>
            <div class="col">
              <p>{!!$manages->lebar!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Suspensi Belakang</p>
            </div>
            <div class="col">
              <p>{!!$manages->suspensi_belakang!!}</p>
            </div>
          </div>
          <!-- row11 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Tinggi (mm)</p>
            </div>
            <div class="col">
              <p>{!!$manages->tinggi!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Rem Depan</p>
            </div>
            <div class="col">
              <p>{!!$manages->rem_depan!!}</p>
            </div>
          </div>
          <!-- row12 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Jarak Sumbu (mm)</p>
            </div>
            <div class="col">
              <p>{!!$manages->jarak_sumbu!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Rem Belakang</p>
            </div>
            <div class="col">
              <p>{!!$manages->rem_belakang!!}</p>
            </div>
          </div>
          <!-- row13 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Jarak Pijak Depan (mm)</p>
            </div>
            <div class="col">
              <p>{!!$manages->pijak_depan!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Sistem Rem</p>
            </div>
            <div class="col">
              <p>{!!$manages->sistem_rem!!}</p>
            </div>
          </div>
          <!-- row14 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Jarak Pijak Belakang (mm)</p>
            </div>
            <div class="col">
              <p>{!!$manages->pijak_belakang!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Sistem Penggerak Roda</p>
            </div>
            <div class="col">
              <p>{!!$manages->sistem_penggerak!!}</p>
            </div>
          </div>
          <!-- row15 -->
          <div class="row">
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Jarak Terendah (mm)</p>
            </div>
            <div class="col">
              <p>{!!$manages->jarak_terendah!!}</p>
            </div>
            <div class="col-md">
              <p class="mb-0 font-weight-bold">Velg dan Ukuran Ban</p>
            </div>
            <div class="col">
              <p>{!!$manages->ukuran_ban!!}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="p-4 mb-3 bg-white">
          <h2>Hubungi Kami</h2>
          @foreach ($contact as $c)
          <p class="mb-0 font-weight-bold">{{$c->contact_name}}</p>
          <p><a href="#">{{$c->contact_desc}}</a></p>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
