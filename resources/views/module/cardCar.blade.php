<div class="col-6 col-md-3 py-2">
    <div class="card">
        
        <a target="_blank" href="{{ route('auto.dettaglio', ['id'=>$car->id]) }}">
            <img src="{{($car->images->count()>0) ? Storage::url($cars->images[0]->filePath) : '/images/placeholder_gmautoveicoli.png'}}"class="card-img-top" alt="...">
        </a>

        <div class="card-body">
            <div class="text">
                <h4 class="mb-0">
                    <a target="_blank" href="{{ route('auto.dettaglio', ['id'=>$car->id]) }}">{{$car->name}}</a>
                </h4>

                <div class="d-flex py-4">
                    <span class="cat">{{$car->preparations -> exemplar->name}} <br>
                        <a target="_blank" href="{{route('auto.cerca.produttore',$car ->preparations -> exemplar-> producer-> id)}}">
                        <img class="img-fluid logo-resize"
                             src="/images/logo_cars/{{$car ->preparations -> exemplar-> producer-> slug}}.svg"
                             alt="{{$car ->preparations -> exemplar-> producer-> name}}">
                        </a>
                    </span>
                   <a href="" class="btn btn-success btnMaxHeight">Scopri di più</a>
                </div>
            </div>
        </div>
    </div>
</div>
