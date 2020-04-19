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
        <section>
            <div class="container py-5">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-4">

                        <button type="button" class="py-4 mx-4 rounded-pill btn btn-info btn-lg w-100 mb-3 text-uppercase" data-toggle="modal" data-target=".bd-example-modal-xl">
                            <i class="fas fa-user-edit"></i> Modifica
                        </button>

                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="container-fluid">

                        <form action="{{route('admin.modificaAuto')}}" method="post">
                        @csrf


                        <div class="row py-5">

                            <div class="col-12 text-center">
                                <h2>Modifica Auto</h2>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="targaVeicolo" class="bmd-label-floating lead text-info">Targa Auto</label>
                                    <input type="text" required class="form-control2" name="targaVeicolo" id="targaVeicolo">
                                </div>

                                <div class="form-group">
                                    <label for="vinVeicolo" class="bmd-label-floating lead text-info">Vin Auto</label>
                                    <input type="text" class="form-control2" name="vinVeicolo" id="vinVeicolo" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group">
                                    <label for="categoriaVeicolo" class="bmd-label-floating lead text-info">Tipologia Veicolo</label>
                                    <select value="3" name="categoriaVeicolo" id="categoriaVeicolo" class="form-control2 input-lg">
                                        <option value="0">Seleziona Tipologia</option>
                                        @foreach(\App\Typology::all() as $producer)
                                            <option value="{{$producer->id}}">{{$producer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="prezzoVeicolo" class="bmd-label-floating lead text-info">Prezzo</label>
                                    <input type="number" required class="form-control2" name="prezzoVeicolo" id="prezzoVeicolo" value="{{$car->price}}">
                                </div>


                            </div>

                            <div class="div-12 col-md-3">
                                <div class="form-group">
                                    <label for="meseImmatricolazione" class="bmd-label-floating lead text-info">Mese Immatricolazione</label>
                                    <select name="meseImmatricolazione" id="meseImmatricolazione" class="form-control2 input-lg">
                                        <option value="1">Gennaio</option>
                                        <option value="2">Febbraio</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Aprile</option>
                                        <option value="5">Maggio</option>
                                        <option value="6">Giugno</option>
                                        <option value="7">Luglio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Settembre</option>
                                        <option value="10">Ottobre</option>
                                        <option value="11">Novembre</option>
                                        <option value="12">Dicembre</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="AnnoImmatricolazione" class="bmd-label-floating lead text-info">Anno Immatricolazione</label>
                                    <input type="number" required class="form-control2" name="AnnoImmatricolazione" min="1900" id="AnnoImmatricolazione">
                                </div>

                                <div class="form-group">
                                    <label for="kmVeicolo" class="bmd-label-floating lead text-info">Chilometraggio (km)</label>
                                    <select required name="kmVeicolo" id="kmVeicolo" class="form-control2 input-lg">
                                        <option value="">Seleziona Kilometraggio</option>
                                        @foreach(\App\Kilometers::all() as $producer)
                                            <option value="{{$producer->id}}">{{$producer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="producer" class="bmd-label-floating lead text-info">Produttore Veicolo </label>
                                    <select name="producer" id="producer" class="form-control2 input-lg">
                                        <option value="0">Nessuna Modifica</option>
                                        @foreach(\App\Producer::all()  as $producer)
                                            <option value="{{$producer->id}}">{{$producer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exemplary" class="bmd-label-floating lead text-info">Modello Veicolo</label>
                                    <select name="exemplary" id="exemplary" class="form-control2 input-lg">
                                        <option value="0">Nessuna Modifica</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="preparation" class="bmd-label-floating lead text-info">Allestimento Veicolo</label>
                                    <select name="preparation" id="preparation" class="form-control2 input-lg">
                                        <option value="0">Nessuna Modifica</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="carburanteVeicolo" class="bmd-label-floating lead text-info">Carburante Veicolo</label>
                                    <select title="Carburante Veicolo" class="form-control2 input-lg" data-width="100%" name="carburanteVeicolo" id="carburanteVeicolo">
                                        @foreach (\App\Fuel::getall() as $item)
                                            <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="coloreVeicolo" class="bmd-label-floating lead text-info">Colore Veicolo</label>
                                    <select title="Colore Veicolo" class="form-control2 input-lg" data-width="100%" name="coloreVeicolo" id="coloreVeicolo">
                                        @foreach (\App\Color::getColors() as $item)
                                            <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="cambioVeicolo" class="bmd-label-floating lead text-info">Cambio Veicolo</label>
                                    <select title="Trasmissione Veicolo" class="form-control2 input-lg" data-width="100%" name="cambioVeicolo" id="cambioVeicolo">
                                        @foreach (\App\Transmission::getall() as $item)
                                            <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="classeVeicolo" class="bmd-label-floating lead text-info">Classe emissioni Veicolo</label>
                                    <select title="Classe emissioni" class="form-control2 input-lg" data-width="100%" name="classeVeicolo" id="classeVeicolo">
                                        @foreach (\App\Grade::getall() as $item)
                                            <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="postiVeicolo" class="bmd-label-floating lead text-info">Posti Veicolo</label>
                                    <select title="Posti Veicolo" class="form-control2 input-lg" data-width="100%" name="postiVeicolo" id="postiVeicolo">
                                        @foreach (\App\Seat::getall() as $item)
                                            <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="porteVeicolo" class="bmd-label-floating lead text-info">Porte Veicolo</label>
                                    <select title="Porte Veicolo" class="form-control2 input-lg" data-width="100%" name="porteVeicolo" id="porteVeicolo">
                                        @foreach (\App\Door::getall() as $item)
                                            <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="testoAnnuncio" class="bmd-label-floating lead text-info">Descrizione dell'annuncio</label>
                                    <textarea class="form-control2" name="testoAnnuncio" id="testoAnnuncio" rows="8"></textarea>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <input type="submit" class="py-4 mx-4 rounded-pill btn btn-info btn-lg mb-3 text-uppercase" value="Completa Modifica">
                            </div>
                        </div>


                        </form>
                    </div>

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
