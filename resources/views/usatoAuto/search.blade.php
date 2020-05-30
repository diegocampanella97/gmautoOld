@extends('layouts.app')

@section('content')
<x-headerComponent title="Ricerca Auto" img=""/>

  <section class="py-5">
    <div class="container">

        @if ($cars->count()<=0)
            <div class="row text-center">
                <div class="col-12">
                    <h3>OPS, la tua ricerca non ha portato risultati</h3>
                </div>
            </div>
            @endif
        <div class="row">

          @foreach ($cars as $item)
          <div class="col-12 col-md-4">
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <a href="{{ route('auto.dettaglio', ['id'=>$item->id,'slug' => $item->slug]) }}">
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
                    <a href="{{ route('auto.dettaglio', ['id'=>$item->id,'slug' => $item->slug]) }}">{{$item->name}}</a>
                </h2>
                    <div class="d-flex mb-3">
                        <span class="cat">{{$item->preparations -> exemplar->name}}<br>
                            <a href="{{route('auto.cerca.produttore',$item ->preparations -> exemplar-> producer-> id)}}">
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
          </div>
          @endforeach


        </div>
            @if($paginate==true)
            <div class="row py-3">
              <div class="col-12 d-flex justify-content-center">

{{--                  {{ dd($cars->links()) }}--}}
                  {{ $cars->links() }}
              </div>
            </div>
            @endif
    </div>

  </section>


@endsection
