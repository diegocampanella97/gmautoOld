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
                    <h1 class="mb-3 bread">Test</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach($producers as $producer)
                    <div>
                        <p>
                            {{$producer->name}} | {{$producer->slug}}
                            <img width="5%" src="images/logo_cars/{{$producer->slug}}.svg" alt="">
                        </p>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @endsection