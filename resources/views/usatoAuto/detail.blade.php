@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs">
                <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
                <span class="mr-2">Auto Usate <i class="ion-ios-arrow-forward"></i></span>
            </p>
          <h1 class="mb-3 bread">{{$car->name}}</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-car-details">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-8">
                <div class="carousel-car2 owl-carousel">
                  @if ($car->images->count()>0)
                    @foreach ($car->images as $item)
                    <div class="item">
                      <div class="car-wrap2 rounded ftco-animate">
                          <img class="img-fluid rounded d-flex align-items-end" src="{{$item -> getUrl(800,570)}}" alt="">
                      </div>
                    </div>
                    @endforeach
                  @else
                  <div class="item">
                    <div class="car-wrap2 rounded ftco-animate">
                        <img class="img-fluid rounded d-flex align-items-end" src="/images/placeholder_gmautoveicoli.png" alt="">
                    </div>
                  </div>
                  @endif

                </div>
            </div>

            <div class="col-md-4">
              <div class="infocar rounded ftco-animate">
                  <div class="text">
                      <h2 class="pricecar mb-0">
                          <a href="#">{{$car->price}} €</a>
                      </h2>
                      <p>Anno Immatricolazione: {{$car->year}}</p>
                      <p class="d-flex mb-0 d-block">

                          <a href="{{ route('contatti') }}" class="btn btn-secondary py-2 ml-1">Scopri </a>
                      </p>
                      {{-- <p class="offer">Offerta valida fino al <span class="data">25-02-2020</span></p>	 --}}
                  </div>
              </div>
              @include('module.social')
          </div>
  </div>

      <div class="text text-center">
      <span class="subheading">{{$car->exemplar->name}}</span>
          <h4>{{$car->collection->name}}</h4>
          <h5>{{$car->mounting}}</h5>
      </div>

        <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard-3"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Kilometri
                          <span>{{$car->km}}</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-gearshift"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                            Cambio
                          <span>{{$car->transmission->name}}</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-painting"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Colore
                          <span>{{$car->color->name}}</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-gasoline"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Carburante
                          <span>{{$car->fuel->name}}</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-door"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          N. di porte
                          <span>{{$car->door->name}} Porte</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12 pills">
                      <div class="bd-example bd-example-tabs">
                          <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Descrizione</a>
                              </li>
                            </ul>
                          </div>

                        <div class="tab-content" id="pills-tabContent">

                          {{-- <div class="tab-pane fade show active text-centers" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                              <div class="row">
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Music</li>
                                      </ul>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                          <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                          <li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
                                      </ul>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
                                      </ul>
                                  </div>
                              </div>
                          </div> --}}

                          <div class="tab-pane fade show active" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                          <p>{{$car->description}}</p>
                          </div>

                        </div>
                      </div>
            </div>
              </div>
    </div>
  </section>

    @include('module.contact')
@endsection
