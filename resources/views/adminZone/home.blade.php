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
            <div class="row d-flex justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Bentornato</span>
                    <h2 class="mb-3">Area Riservata</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center">
                    <h3>
                        Gestione Auto
                    </h3>
                </div>
                <div class="col-12 col-md-3">
                    <a href="{{route('admin.aggiungiAuto')}}" class="py-4 mx-4 rounded-pill btn btn-info btn-lg w-100 mb-3 text-uppercase">
                        <h4 class="text-white">
                            <i class="fas fa-user-edit"></i> Aggiungi Auto
                        </h4>
                    </a>
                </div>

                <div class="col-12 col-md-3">
                    <a href="{{route('admin.listaAuto')}}" class="py-4 mx-4 rounded-pill btn btn-info btn-lg w-100 mb-3 text-uppercase">
                        <h4 class="text-white">
                            <i class="fas fa-user-edit"></i> Lista Auto
                        </h4>
                    </a>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center">
                    <h3>
                        Gestione Cliente
                    </h3>
                </div>

                <div class="col-12 col-md-3">
                    <a href="{{route('admin.listaClienti')}}" class="py-4 mx-4 rounded-pill btn btn-info btn-lg w-100 mb-3 text-uppercase">
                        <h4 class="text-white">
                            <i class="fas fa-user-edit"></i> Lista Clienti
                        </h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection