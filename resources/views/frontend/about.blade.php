@extends('frontend.template')
@section('about')

<div class="site-blocks-cover inner-page-cover" style="background-image: url(/photos/pajero.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
        <h1 class="text-white font-weight-light">About Mitsubishi</h1>
        <div><a href="/">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">About</span></div>

      </div>
    </div>
  </div>
</div>

<div class="site-section" data-aos="fade-up">
  <div class="container">
    <div class="row align-items-center">
      @foreach ($about as $ab)
      <div class="col-md-6 mb-5 mb-md-0">
        <img src="{{$ab->about_image}}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
      </div>
      <div class="col-md-6 pl-md-5">
        <h2 class="font-weight-light text-black mb-4">About Company</h2>
        <p>{!!$ab->about_content!!}</p>
      </div>
      @endforeach
    </div>
  </div>
</div>

<div class="site-section" data-aos="fade-up">
  <div class="container">
    <div class="row align-items-center">
      @foreach ($contact as $c)
      <div class="col-md-6 mb-5 mb-md-0">
        <img src="{{$ab->about_image}}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
      </div>
      <div class="col-md-6 pl-md-5">
        <h2 class="font-weight-light text-black mb-4">About Company</h2>
        <p>{!!$c->contact_name!!}</p>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
