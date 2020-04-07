@extends('layouts.app')

@section('content')
<div class="hero-wrap ftco-degree-bg" style="background-image: url('/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
        <div class="col-lg-8 ftco-animate">
          <div class="text w-100 text-center mb-md-5 pb-md-5">
            <h1 class="mb-4">Auto Usate | KM 0</h1>
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

  <section>
    <div class="container">
        <div class="row">

          @foreach ($cars as $item)
          <div class="col-12 col-md-4">
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <a href="{{ route('auto.dettaglio', ['id'=>$item->id]) }}">
                  @if ($item->images->count()>0)
                    <div class="img rounded d-flex align-items-end" style="background-image: url(
                      {{
                      Storage::url($item->images[0]->filePath)
                      }});">
                    </div>
                  @else
                    <div class="img rounded d-flex align-items-end" style="background-image: url('/images/placeholder_gmautoveicoli.png');">
                    </div>
                  @endif
                  </a>
                <div class="text">
                <h2 class="mb-0">
                    <a href="{{ route('auto.dettaglio', ['id'=>$item->id]) }}">{{$item->name}}</a>
                </h2>
                    <div class="d-flex mb-3 mt-3">
                        <span class="cat">{{$item->preparations -> exemplar->name}} <br>
                            <img alt="{{$item ->preparations -> exemplar-> producer-> name}}" class="img-fluid logo-resize" src="/images/logo_cars/{{$item ->preparations -> exemplar-> producer-> slug}}.svg">
                        </span>
                        <p class="price ml-auto">{{$item->price}} <span>€</span></p>
                    </div>
                  <p class="d-flex justify-content-center mb-0 d-block">
                    <a href="{{ route('auto.dettaglio', ['id'=>$item->id]) }}" class="btn btn-xl btn-primary py-2 mr-1">Scopri di più</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          @endforeach


        </div>
            <div class="row py-3">
              <div class="col-12 d-flex justify-content-center">
                {{ $cars->links() }}

              </div>
            </div>
    </div>

  </section>


@endsection
