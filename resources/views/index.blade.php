@extends('frontend.template')
@section('home')

<div class="slide-one-item home-slider owl-carousel">
  @foreach ($slider as $s)
  <div class="site-blocks-cover overlay" style="background-image: url({{$s->slider_image}});" data-aos="fade" data-stellar-background-ratio="0.5">
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
  <!-- <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
          <h1 class="text-white font-weight-light">Love The Places</h1>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga est inventore ducimus repudiandae.</p>
          <p><a href="#" class="btn btn-primary py-3 px-5 text-white">Book Now!</a></p>
        </div>
      </div>
    </div>
  </div> -->

</div>

<div class="site-section">

  <div class="container overlap-section">
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a href="#" class="unit-1 text-center">
          <img src="images/img_2.jpg" alt="Image" class="img-fluid">
          <div class="unit-1-text">
            <h3 class="unit-1-heading">Write Down Your Experience</h3>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a href="#" class="unit-1 text-center">
          <img src="images/img_1.jpg" alt="Image" class="img-fluid">
          <div class="unit-1-text">
            <h3 class="unit-1-heading">Explore Asian Mountains</h3>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <a href="#" class="unit-1 text-center">
          <img src="images/img_3.jpg" alt="Image" class="img-fluid">
          <div class="unit-1-text">
            <h3 class="unit-1-heading">Safe Trip With Airasia</h3>
          </div>
        </a>
      </div>
    </div>
  </div>

</div>


<div class="site-section">
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
</div>






<div class="site-section block-13 bg-light">


  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7">
        <h2 class="font-weight-light text-black text-center">Testimonials</h2>
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
        <h2 class="font-weight-light text-black">Our Destinations</h2>
        <p class="color-black-opacity-5">Choose Your Next Destination</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <a href="#" class="unit-1 text-center">
          <img src="images/01-greece.jpg" alt="Image" class="img-fluid">
          <div class="unit-1-text">
            <strong class="text-primary mb-2 d-block">$590</strong>
            <h3 class="unit-1-heading">Santorini, Greece</h3>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <a href="#" class="unit-1 text-center">
          <img src="images/02-rome.jpg" alt="Image" class="img-fluid">
          <div class="unit-1-text">
            <strong class="text-primary mb-2 d-block">$390</strong>
            <h3 class="unit-1-heading">Rome, Italy</h3>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <a href="#" class="unit-1 text-center">
          <img src="images/03-japan.jpg" alt="Image" class="img-fluid">
          <div class="unit-1-text">
            <strong class="text-primary mb-2 d-block">$390</strong>
            <h3 class="unit-1-heading">Mount Fuji, Japan</h3>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <a href="#" class="unit-1 text-center">
          <img src="images/04-dubai.jpg" alt="Image" class="img-fluid">
          <div class="unit-1-text">
            <strong class="text-primary mb-2 d-block">$320</strong>
            <h3 class="unit-1-heading">Camels, Dubai</h3>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <a href="#" class="unit-1 text-center">
          <img src="images/05-london.jpg" alt="Image" class="img-fluid">
          <div class="unit-1-text">
            <strong class="text-primary mb-2 d-block">$290</strong>
            <h3 class="unit-1-heading">Elizabeth Tower, London</h3>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
        <a href="#" class="unit-1 text-center">
          <img src="images/06-australia.jpg" alt="Image" class="img-fluid">
          <div class="unit-1-text">
            <strong class="text-primary mb-2 d-block">$390</strong>
            <h3 class="unit-1-heading">Opera House, Australia</h3>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light">
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
