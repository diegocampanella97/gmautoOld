<div class="col-12 col-md-3 py-2">
    <div class="card cardHeight">
        
        <a target="_blank" href="{{ route('auto.dettaglio', ['id'=>$car->id,'slug' => $car->slug]) }}">
        <img src="{{($car->images->count()>0) ? Storage::url($car->images[0]->filePath) : '/images/placeholder_gmautoveicoli.png'}}"class="card-img-top" alt="{{$car->name}}">
        </a>

        <div class="card-body d-flex align-items-center">
            <div class="text ">
                <h4 class="mb-2">
                    <a target="_blank" href="{{ route('auto.dettaglio', ['id'=>$car->id,'slug' => $car->slug]) }}">
                        {{Str::limit($car->name, 20)}}
                    </a>
                </h4>

                <div class="d-flex py-4 align-items-center">
                    <span class="cat">{{$car->preparations -> exemplar->name}} <br>
                        <a target="_blank" href="{{route('auto.cerca.produttore',$car ->preparations -> exemplar-> producer-> slug)}}">
                        <img class="img-fluid logo-resize"
                             src="/images/logo_cars/{{$car ->preparations -> exemplar-> producer-> slug}}.svg"
                             alt="{{$car ->preparations -> exemplar-> producer-> name}}"/>
                        </a>
                    </span>
                    <a target="_blank" href="{{route('auto.dettaglio',['id' => $car->id, 'slug' => $car->slug])}}" class="btn btn-xl btn-primary py-2 mr-1 btnMaxHeight">Scopri di più</a>
                </div>


            </div>
        </div>
    </div>
</div>
