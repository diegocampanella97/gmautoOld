<div class="col-6 col-md-3 m-1">
    <div class="card" style="width: 18rem;">
        <img src="{{($car->images->count()>0) ? Storage::url($cars->images[0]->filePath) : '/images/placeholder_gmautoveicoli.png'}}" class="card-img-top" alt="...">
        <div class="card-body">
            <div class="text">
                <h4 class="mb-0">
                    <a href="{{ route('auto.dettaglio', ['id'=>$car->id]) }}">{{$car->name}}</a>
                </h4>

                <div class="d-flex mb-3 mt-3">
                    <span class="cat">{{$car->preparations -> exemplar->name}} <br>
                        <a href="{{route('auto.cerca.produttore',$car ->preparations -> exemplar-> producer-> id)}}">
                        <img class="img-fluid logo-resize"
                             src="/images/logo_cars/{{$car ->preparations -> exemplar-> producer-> slug}}.svg"
                             alt="{{$car ->preparations -> exemplar-> producer-> name}}">
                        </a>
                    </span>
                    <p class="price ml-auto">{{$car->price}} <span>€</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
