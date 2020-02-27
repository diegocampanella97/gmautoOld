@extends('layouts.app')

@section('content')

<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
      <div class="col-lg-8 ftco-animate">
        <div class="text w-100 text-center mb-md-5 pb-md-5">
          <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
          <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
          <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="ion-ios-play"></span>
            </div>
            <div class="heading-title ml-5">
              <span>Easy steps for renting a car</span>
            </div>
          </a>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-no-pt bg-light">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-12 featured-top">
        <div class="row no-gutters">
          <div class="searchcar col-12 align-items-center">
            <form action="#" class="request-form ftco-animate bg-primary fadeInUp ftco-animated">
              <h2>Trova la tua auto</h2>
              <div class="row">
                  <div class="col-lg-11 col-md-5 col-sm-12 col-xs-12">
                    <div class="car-field">
                      <input type="text" placeholder="Cosa stai cercando?">
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12 py-2 py-md-0">
                    <button class="btn btn-secondary py-3 px-4" type="submit"><i class="icon ion-md-search"></i></button>
                  </div>
                </div>
            </form>
      </div>
    </div>
  </div>
</section>
    
<section class="ftco-section ftco-no-pt bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 heading-section text-center ftco-animate mb-5">
        <span class="subheading">Le nostre offerte</span>
        <h2 class="mb-2">Cosa stai cercando?</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="carousel-car owl-carousel">

          @foreach (\App\Car::getLastCar() as $item)
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url({{Storage::url($item->images[0]->filePath)}});">
                </div>
                <div class="text">
                <h2 class="mb-0"><a href="#">{{$item->name}}</a></h2>
                  <div class="d-flex mb-3">
                    <span class="cat">{{$item->exemplar->name}} | {{$item->collection->name}}</span>
                    <p class="price ml-auto">{{$item->price}} <span>€</span></p>
                  </div>
                  <p class="d-flex justify-content-center mb-0 d-block">
                    <a href="{{ route('auto.dettaglio', ['id'=>$item->id]) }}" class="btn btn-xl btn-primary py-2 mr-1">Scopri di più</a>
                  </p>
                </div>
              </div>
            </div>            
          @endforeach



        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-about">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
      </div>
      <div class="col-md-6 wrap-about ftco-animate">
        <div class="heading-section heading-section-white pl-md-5">
          <span class="subheading">Chi siamo</span>
          <h2 class="mb-4">Benvenuti su GM Automobili</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et...</p>
          <p><a href="#" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Servizi</span>
        <h2 class="mb-3">I nostri servizi</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><i class="fas fa-car"></i></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Lorem ipsum</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Lorem ipsum</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Lorem ipsum</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Lorem ipsum</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 heading-section heading-section-white ftco-animate">
        <h2 class="mb-3">Scopri le nostre offerte per il noleggio di furgoni</h2>
      <a href="{{route('contatti')}}" class="btn-prev btn-primary btn-lg">Richiedi preventivo</a>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter ftco-section img bg-light" id="section-counter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="20">0</strong>
            <span>Anni di esperienza</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="+1800">0</strong>
            <span>Auto vendute</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="5200">0</strong>
            <span>Riparazioni</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text d-flex align-items-center">
            <strong class="number" data-number="100%">0</strong>
            <span>Clienti soddisfatti</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contactus-section ftco-intro" style="background-image: url(images/contactus.jpg);">
  <div class="container">
  <div class="contactus">
  <div class="row justify-content-center">
  <div class="col-12 heading-section heading-section-white ftco-animate">
  <h2 class="mb-3">Sei un nostro cliente? Contattaci.</h2>
  <p class="con-text pb-5">Per richieste di informazioni o assistenza per la tua auto. Siamo a tua disposizione.</p>
  
  <div class="contactus_btn">
  <a href="{{route('contatti')}}" class="con-link" target="" rel="follow"><i class="icon ion-ios-arrow-forward"></i> Entra in contatto con noi</a>
  </div>
</section>


  


@endsection