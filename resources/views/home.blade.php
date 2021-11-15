@extends('layouts.app')

@section('content')
<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/fiat.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
      <div class="col-lg-8 ftco-animate">
        <div class="text w-100 text-center mb-md-5 pb-md-5">
          <h1 class="mb-4">Professionalità, cortesia e passione per le auto</h1>
          <p style="font-size: 18px;">Attivi sul territorio da oltre 30 anni, come attività a conduzione familiare offriamo alla clientela un vasto assortimento di autovetture usate plurimarche, selezionate e garantite.</p>
          <a href="{{ route('contatti') }}" class="icon-wrap d-flex align-items-center mt-4 justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <i class="fas fa-2x fa-envelope text-white"></i>
            </div>
            <div class="heading-title ml-5">
              <span>Vieni a trovarci!</span>
            </div>
          </a>
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

            <form action="{{ route('auto.cerca') }}" method="post" class="request-form ftco-animate bg-primary fadeInUp ftco-animated">
              @csrf
              <h2 class="text-center">Trova la tua auto</h2>
              <div class="row">
                  <div class="col-lg-11 col-md-5 col-sm-12 col-xs-12">
                    <div class="car-field">
                      <input type="text" name="query" placeholder="Cosa stai cercando?">
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



<section class="ftco-section ftco-about">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
      </div>
      <div class="col-md-6 wrap-about ftco-animate">
        <div class="heading-section heading-section-white pl-md-5">
          <span class="subheading">Chi siamo</span>
          <h2 class="mb-4">Benvenuti su GM Automobili</h2>
          <p>GM  Autoveicoli, sita in Turi (Ba) sulla SP 215 al Km 1, si occupa della rivendita di auto usate. Attivi sul territorio da oltre 30 anni, come attività a conduzione familiare offriamo alla clientela un vasto assortimento di autovetture usate plurimarche, selezionate e garantite. La collaborazione con officine, elettrauto ed altri professionisti del settore, ci permette di soddisfare pienamente le esigenze della nostra clientela.</p>
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
        <p>L’esperienza sviluppata dopo anni di lavoro, ci consente <br> di soddisfare le tante esigenze dei nostri clienti:</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 ftco-animate">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-5"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Auto nuove e km 0</h3>
          </div>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-key-2"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Noleggio Veicolo <br> breve/lungo termine</h3>
          </div>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-mechanic"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Permuta e acquisto dell’usato</h3>
          </div>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">Soccorso stradale H 24</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Le nostre offerte</span>
                <h2 class="mb-2">Le ultime novità</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-car owl-carousel">

                    @foreach (\App\Car::getLastCar() as $item)
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">


                                @if ($item->images->count()>0)
                                    <a href="{{ route('auto.dettaglio', ['id'=>$item->id,'slug' => $item->slug]) }}">
                                        <div class="img rounded d-flex align-items-end" style="background-image: url(
                                        {{
                                        Storage::url($item->images[0]->filePath)
                                        }});">
                                        </div>
                                    </a>

                                @else
                                    <a href="{{ route('auto.dettaglio', ['id'=>$item->id,'slug' => $item->slug]) }}">
                                        <div class="img rounded d-flex align-items-end" style="background-image: url('/images/placeholder_gmautoveicoli.png');">
                                        </div>
                                    </a>
                                    @endif
                                    </a>
                                    <div class="text">
                                        <h2 class="mb-0">
                                            <a href="{{ route('auto.dettaglio', ['id'=>$item->id,'slug' => $item->slug]) }}">{{$item->name}}</a>
                                        </h2>
                                        <div class="d-flex mb-3">
                        <span class="cat">{{$item->preparations -> exemplar->name}}<br>
                            <a href="{{route('auto.cerca.produttore',$item ->preparations -> exemplar-> producer-> slug)}}">
                            <img class="img-fluid logo-resize"
                                 src="/images/logo_cars/{{$item ->preparations -> exemplar-> producer-> slug}}.svg"
                                 alt="{{$item ->preparations -> exemplar-> producer-> name}}">
                            </a>
                        </span>
                                            <p class="price ml-auto">{{$item->price}} €</p>
                                        </div>
                                        <p class="d-flex justify-content-center mb-0 d-block">
                                            <a href="{{ route('auto.dettaglio', ['id'=>$item->id,'slug' => $item->slug]) }}" class="btn btn-xl btn-primary py-2 mr-1">Scopri di più</a>
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


<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 heading-section heading-section-white ftco-animate">
        <h2 class="mb-3">Finanziamenti personalizzati e tasso agevolato </h2>
      <a href="{{route('contatti')}}" class="btn-prev btn-primary btn-lg">Richiedi preventivo</a>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter ftco-section img bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 justify-content-center ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number">20</strong>
            <span>Anni di esperienza</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number">1800</strong>
            <span>Auto vendute</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number">5200</strong>
            <span>Noleggi</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center ftco-animate">
        <div class="block-18">
          <div class="text d-flex align-items-center">
            <strong class="number">1000</strong>
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
  <h4 class="con-text py-2">Garanzia 12 mesi sull’usato</h4>
  <p class="con-text pb-5">Per richieste di informazioni o assistenza per la tua auto. Siamo a tua disposizione.</p>

  <div class="contactus_btn">
  <a href="{{route('contatti')}}" class="con-link" target="" rel="follow"><i class="icon ion-ios-arrow-forward"></i> Entra in contatto con noi</a>
  </div>
</section>





@endsection
