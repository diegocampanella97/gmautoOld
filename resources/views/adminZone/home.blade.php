@extends('layouts.app')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>area Riservata <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Area Riservata</h1>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Bentornato</span>
                    <h2 class="mb-3">Area Riservata</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-6">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="">
                        <div class="card-body text-center">
                          <h3 class="card-title">Aggiungi Auto</h3>
                        <a href="{{route('admin.aggiungiAuto')}}" class="btn btn-primary">Aggiungi</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="">
                        <div class="card-body text-center">
                          <h3 class="card-title">Lista Auto</h3>
                          <a href="{{route('admin.listaAuto')}}" class="btn btn-primary">Modifica</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection