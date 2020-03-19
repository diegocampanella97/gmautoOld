@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contatti <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Contatti</h1>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12	featured-top">
                <div class="row no-gutters">
                      <div class="col-md-4 d-flex align-items-center">
                        
                          <form action="{{ route('noleggio.invia') }}" method="POST" class="request-form ftco-animate bg-primary">
                            @csrf
                            <h2>Noleggia la tua auto</h2>
                            @if (Session::get('flag')!=null)
                            <div class="alert alert-danger">
                              <ul>
                                <li>{{Session::get('flag')}}</li>
                              </ul>
                            </div>
                            @endif


                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="d-flex">
                              <div class="form-group mr-2">
                                <label for="" class="label">Data di ritiro</label>
                                <input type="date" class="form-control" name="dataRitiro" id="book_pick_date2" placeholder="Data">
                              </div>
                              <div class="form-group ml-2">
                                <label for="" class="label">Data di consegna</label>
                                <input type="date" class="form-control" name="dataConsegna" id="book_off_date2" placeholder="Data">
                              </div>
                          </div>
                  <div class="form-group">
                    <label for="" class="label">Messaggio</label>
                    <textarea class="form-control" name="messaggio" rows="3"></textarea>
                  </div>
              

                    <div class="form-group">
                      <input type="submit" value="Invia Messaggio" class="btn btn-secondary py-3 px-4">
                    </div>
                        </form>
                        
                      </div>
                      <div class="col-md-8 d-flex align-items-center">
                          <div class="services-wrap rounded-right w-100">
                              <h3 class="heading-section mb-4">Guidare senza pensieri si può</h3>
                              <div class="row d-flex mb-4">
                          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-seat-belt"></span></div>
                              <div class="text w-100">
                                <h3 class="heading mb-2">Pianifica una vacanza</h3>
                            </div>
                            </div>      
                          </div>
                          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-gears"></span></div>
                              <div class="text w-100">
                                <h3 class="heading mb-2">Verifica le date<gli amici</h3>
                              </div>
                            </div>      
                          </div>
                          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-car-key"></span></div>
                              <div class="text w-100">
                                <h3 class="heading mb-2">Ritira in concessonario</h3>
                              </div>
                            </div>      
                          </div>
                        </div>
                          </div>
                      </div>
                  </div>
            </div>
      </div>
</section>

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
              <h3 class="heading mb-2">Breve Termine</h3>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-wheelchair"></span>
            </div>
            <div class="text w-100">
              <h3 class="heading mb-2">Lorem ipsum</h3>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
</section>

{{-- <section>
  <div class="container py-4">
    <div class="row">
      <div class="col-12 col-md-6">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="single-feature">
                <img src="img/feature/f1.png" alt="">
                <h4>Shipment Tracking</h4>
                <p>
                The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="single-feature">
                <img src="img/feature/f1.png" alt="">
                <h4>Shipment Tracking</h4>
                <p>
                The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="single-feature">
                <img src="img/feature/f1.png" alt="">
                <h4>Shipment Tracking</h4>
                <p>
                The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="single-feature">
                <img src="img/feature/f1.png" alt="">
                <h4>Shipment Tracking</h4>
                <p>
                The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
              </div>
            </div>
          </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="heading-section ftco-animate fadeInUp ftco-animated">
          <div class="single-feature">
            <img src="img/feature/f1.png" alt="">
            <h2>Shipment Tracking</h2>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod modi tempore minus odio laboriosam exercitationem, possimus non? Nam error praesentium laudantium corporis tempore quidem, quos quasi ab, vel delectus minus.
            </p>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod modi tempore minus odio laboriosam exercitationem, possimus non? Nam error praesentium laudantium corporis tempore quidem, quos quasi ab, vel delectus minus.
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

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
            Devi effettuare un trasloco o trasportare merci? Vieni da noi e troverai la soluzione più adatta alle tue necessità.
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
                  <h3 class="mb-3 text-white">Hai necessità di trasportare persone diversamente abili in carrozzina?</h3>
                  <p> Da noi troverai un mezzo allestito e omologato che ti consentirà di farlo in totale indipendenza.</p>
                  <a href="{{route('disabile')}}" class="btn-prev btn-primary btn-lg">Richiedi informazioni</a>
                </div>
            </div>
        </div>
</section>

@include('module.contact')

@endsection