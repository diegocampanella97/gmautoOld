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

    @if(!$car->approved)
        <x-alerts flag="danger" text="Attenzione! Questo annuncio è visibile solo agli amministratori"/>
    @endif

    @if(Auth::user())
        <div class="container py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-4">
                    <x-model-edit-car :car="$car"/>
                    <x-model-car-image :car="$car"/>
                </div>
            </div>
        </div>
    @endif

  <section class="ftco-section ftco-car-details">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-8">
                <div class="carousel-car2 owl-carousel">
                  @if ($car->images->count()>0)
                    @foreach ($car->images()->orderBy('order','desc')->get() as $item)
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

      <div class="text text-center py-5">
        <span class="subheading">{{$car->preparations->exemplar->producer->name}}</span>
        <h4>{{$car->preparations->exemplar->name}}</h4>
        <h5>{{$car->preparations->name}}</h5>
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
                          <span>{{$car->kilometers->name}}</span>
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

                          <div class="tab-pane fade show active" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                            <p>{{$car->description}}</p>
                          </div>

                        </div>
                      </div>
            </div>
              </div>
    </div>
  </section>

    <x-form-contacts :idAuto="$car->id"/>
@endsection

@push('jsCustom')
    <script type="text/javascript">
        $(document).ready( () =>
        {
            $('select[name="producer"]').on('change',function(){
                var countryID = $(this).val();
                if(countryID)
                {
                    jQuery.ajax({
                        url : '/exemplaries/' + countryID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            console.log(data);
                            $('select[name="exemplary"]').empty();
                            $.each(data, function(key,value){
                                $('select[name="exemplary"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="exemplary"]').empty();
                }
            });

            $('select[name="exemplary"]').on('change',function(){
                var countryID = $(this).val();
                if(countryID)
                {
                    jQuery.ajax({
                        url : '/preparation/' + countryID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            $('select[name="preparation"]').empty();
                            $.each(data, function(key,value){
                                $('select[name="preparation"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="exemplary"]').empty();
                }
            });


        });
    </script>

    <script>
        $(document).ready(() => {
            document.getElementById('titolo').value="{{$car->name}}"

            document.getElementById('targaVeicolo').value="{{$car->targa}}"
            document.getElementById('vinVeicolo').value="{{$car->vid}}"
            document.getElementById('categoriaVeicolo').value={{$car->tipology->id}};
            document.getElementById('prezzoVeicolo').value={{$car->price}};

            document.getElementById('meseImmatricolazione').value={{$car->mouth}};
            document.getElementById('AnnoImmatricolazione').value={{$car->year}};
            document.getElementById('kmVeicolo').value={{$car->kilometers->id}};

            document.getElementById('carburanteVeicolo').value={{$car->fuel->id}};
            document.getElementById('coloreVeicolo').value={{$car-> color->id}};
            document.getElementById('cambioVeicolo').value={{$car-> transmission->id}};
            document.getElementById('classeVeicolo').value={{$car-> euroClass ->id}};
            document.getElementById('postiVeicolo').value={{$car->seat ->id}};
            document.getElementById('porteVeicolo').value={{$car->door ->id}};

            document.getElementById('testoAnnuncio').value="{{$car->description}}";

            }
        )
    </script>
@endpush
