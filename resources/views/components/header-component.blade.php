<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{$img}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-12 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">{{$title}}</h1>
                @if((($car!=null) && Auth::user()))
                    @if($car->approved)
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center py-4">
                                    <a href="{{route('facebook.publish',['id' => $car->id])}}">
                                        <button class="btnMaxWidth px-5 my-2 rounded-pill btn btn-success">Pubblica su Facebook</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</section>
