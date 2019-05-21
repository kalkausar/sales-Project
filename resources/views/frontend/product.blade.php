@extends('frontend.template')
@section('product')

<div class="site-blocks-cover inner-page-cover" style="background-image: url(images/produk.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
        <h1 class="text-white font-weight-light">Produk Mitsubishi</h1>
        <div><a href="/">Beranda</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Produk</span></div>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      @foreach ($product as $pro)
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <a href="/spesifikasi/{{$pro->id}}" class="unit-1 text-center">
          <img src="{{$pro->product_image}}" alt="Image" class="img-fluid" style="width:350px; height:250px">
          <div class="unit-1-text">
            <strong class="text-primary mb-2 d-block" class="text-white">Harga Mulai Rp. {!!$pro->harga_barang!!}</strong>
            <h3 class="unit-1-heading">{!!$pro->product_name!!}</h3>
            <h3 class="unit-1-heading">{!!$pro->product_type!!}</h3>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>

</div>

<div class="site-section block-13 bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7">
        <h2 class="font-weight-light text-black text-center">What People Says</h2>
      </div>
    </div>

    <div class="nonloop-block-13 owl-carousel">

      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-5">
              <img src="images/img_1.jpg" alt="Image" class="img-md-fluid">
            </div>
            <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
              <p class="text-black lead">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam
                atque, corrupti porro&rdquo;</p>
              <p class="">&mdash; <em>James Martin</em>, <a href="#">Traveler</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-5">
              <img src="images/img_2.jpg" alt="Image" class="img-md-fluid">
            </div>
            <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
              <p class="text-black lead">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam
                atque, corrupti porro&rdquo;</p>
              <p class="">&mdash; <em>Clair Augustin</em>, <a href="#">Traveler</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-5">
              <img src="images/img_4.jpg" alt="Image" class="img-md-fluid">
            </div>
            <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
              <p class="text-black lead">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam
                atque, corrupti porro&rdquo;</p>
              <p class="">&mdash; <em>James Martin</em>, <a href="#">Traveler</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <h2 class="font-weight-light text-black">Our Services</h2>
        <p class="color-black-opacity-5">We Offer The Following Services</p>
      </div>
    </div>
    <div class="row align-items-stretch">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary flaticon-airplane"></span></div>
          <div>
            <h3>Air Ticketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ship"></span></div>
          <div>
            <h3>Cruises</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary flaticon-route"></span></div>
          <div>
            <h3>Tour Packages</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary flaticon-hotel"></span></div>
          <div>
            <h3>Hotel Accomodations</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sailboat"></span></div>
          <div>
            <h3>Sea Explorations</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ski"></span></div>
          <div>
            <h3>Ski Experiences</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
