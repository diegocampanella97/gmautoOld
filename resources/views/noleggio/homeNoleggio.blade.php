@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('https://www.tripsta.it/wp-content/uploads/trip-5.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contatti <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Contatti</h1>
      </div>
    </div>
  </div>
</section>


@include('module.noleggioFormOriginal')



<section class="ftco-section bg-light">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5 fadeInUp ftco-animated">
          <h2 class="mb-2">Cosa stai cercando?</h2>
          <p>Offriamo vari modelli auto in grado di soddisfare  le tue esigenze per il noleggio a breve e lungo termine. </p>
        </div>
        <div class="col-12 col-md-4">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-transportation"></span>
            </div>
            <div class="text w-100">
              <h3 class="heading mb-2">Breve Termine</h3>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-car"></span>
            </div>
            <div class="text w-100">
              <h3 class="heading mb-2">Lungo Termine</h3>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-wheelchair"></span>
            </div>
            <div class="text w-100">
              <h3 class="heading mb-2">Trasporto Disabili</h3>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
</section>
<section class="ftco-section ftco-about py-4">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(/images/logo_noleggio.jpg);">
      </div>
      <div class="col-md-6 wrap-about ftco-animate fadeInUp ftco-animated">
        <div class="heading-section heading-section-white pl-md-5">
          <h2 class="mb-4">NOLEGGIO <br>  A BREVE/LUNGO TERMINE</h2>
          <p>
            Sei pronto a guidare senza troppi pensieri? Vieni a trovarci! Offriamo vari modelli auto in grado di soddisfare  le tue esigenze per il noleggio a breve e lungo termine. 
          </p>
          <p>
            Se stai pianificando una vacanza in famiglia o un weekend fuori porta con gli amici, da noi trovi pulmini 9 posti che ti permetteranno  di muoverti in totale indipendenza e sicurezza.
          </p>
          <p>

          </p>
          <p>
            Devi effettuare un trasloco o trasportare merci? Vieni da noi e troverai la soluzione pi?? adatta alle tue necessit??.
          </p>
        </div>
      </div>
    </div>
  </div>
  </section>

<section class="ftco-section ftco-intro " style="background-image: url(/images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 heading-section heading-section-white ftco-animate">
                  <h3 class="mb-3 text-white">Hai necessit?? di trasportare persone diversamente abili in carrozzina?</h3>
                  <p> Da noi troverai un mezzo allestito e omologato che ti consentir?? di farlo in totale indipendenza.</p>
                  <a href="{{route('disabile')}}" class="btn-prev btn-primary btn-lg">Richiedi informazioni</a>
                </div>
            </div>
        </div>
</section>

@include('module.contact')

@endsection