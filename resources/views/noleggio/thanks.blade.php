@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
        <div class="col-12 text-center">
            <h2 class="py-3 text-white">Grazie</h2>
            <p class="lead">La tua richiesta è stata presa in carico, verrai ricontattato il prima possibile da un nostro specialista.</p>
        </div>
    </div>
  </div>
</section>

<section>
    <div class="container">
        <div class="row text-center py-5">
            <div class="col-12">
                <a href="{{route('home')}}">
                    <button class="mx-3 my-3 btn btn-primary rounded">
                        <h4 class="text-white"> Torna Indietro </h4>
                    </button>
                </a>
            </div>
        </div>
    </div>

</section>
@endsection
