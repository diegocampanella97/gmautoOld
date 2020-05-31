@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('https://www.fcafleet-business.it/Style%20library/Domino/reskin18/images/offers/Hero_offerte.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2">
            <a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a>
          </span></p>
        <h1 class="mb-3 bread">Galleria Auto</h1>
      </div>
    </div>
  </div>
</section>

    

  <section>
    <div class="container py-4">
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
                            <a href="{{route('auto.cerca.produttore',$item ->preparations -> exemplar-> producer-> slug)}}">
                            <img class="img-fluid logo-resize"
                                 src="/images/logo_cars/{{$item ->preparations -> exemplar-> producer-> slug}}.svg"
                                 alt="{{$item ->preparations -> exemplar-> producer-> name}}">
                            </a>
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
