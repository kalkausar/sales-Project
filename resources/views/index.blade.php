@extends('frontend.template')
@section('home')

<div class="slide-one-item home-slider owl-carousel">
  @foreach ($slider as $s)
  <div class="site-blocks-cover overlay" style="background-image: url('{{$s->slider_image}}');" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


          <h1 class="text-white font-weight-light">{{$s->slider_name}}</h1>
          <p class="mb-5">{{$s->slider_text}}</p>
          <!-- <p><a href="#" class="btn btn-primary py-3 px-5 text-white">Book Now!</a></p> -->

        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>

<div class="site-section">

  <div class="container overlap-section">
    <div class="row">
      <?php $count = 0; ?>
      @foreach ($product as $pro)
      <?php if($count == 3) break; ?>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a href="#" class="unit-1 text-center">
          <img src="{{$pro->product_image}}" alt="Image" class="img-fluid" style="width:350px; height:250px">
          <div class="unit-1-text">
            <h3 class="unit-1-heading">{!!$pro->product_name!!}</h3>
            <h3 class="unit-1-heading">{!!$pro->product_type!!}</h3>
          </div>
        </a>
      </div>
      <?php $count++; ?>
      @endforeach
    </div>
  </div>

</div>


<!-- <div class="site-section">
  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary flaticon-airplane"></span></div>
          <div>
            <h3>Air Ticketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ship"></span></div>
          <div>
            <h3>Cruises</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="unit-4 d-flex">
          <div class="unit-4-icon mr-4"><span class="text-primary flaticon-route"></span></div>
          <div>
            <h3>Tour Packages</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            <p><a href="#">Learn More</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div> -->

<div class="site-section block-13 bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7">
        <h2 class="font-weight-light text-black text-center">Testimonials</h2>
      </div>
    </div>

    <div class="nonloop-block-13 owl-carousel">
      @foreach($testi as $ts)
      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-5">
              <img src="{{$ts->testimoni_image}}" alt="Image" class="img-md-fluid" style="background-size:700px 799px" >
            </div>
            <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
              <p class="text-black lead">&ldquo;{{$ts->testimoni_string}}&rdquo;</p>
              <p class="">&mdash; <em>{{$ts->testimoni_name}}</em>, <a href="#">{{$ts->testimoni_job}}</a></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>


<div class="site-section">

  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <h2 class="font-weight-light text-black">Produk Lainnya</h2>
      </div>
    </div>
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


<!-- <div class="site-section bg-light">
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
</div> -->

@endsection
