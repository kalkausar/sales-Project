@extends('frontend.template')
@section('contact')

<div class="site-blocks-cover inner-page-cover" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
        <h1 class="text-white font-weight-light">Get In Touch</h1>
        <div><a href="/">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Contact</span></div>

      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-7 mb-5">

        <form action="#" class="p-5 bg-white">

          
        </form>
      </div>

      <div class="col-md-5">

        <div class="p-4 mb-3 bg-white">
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
