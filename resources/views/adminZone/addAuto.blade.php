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
    <form method="POST" action="{{route('admin.aggiungiAutoRichiesta')}}">
        @csrf
    <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <span class="subheading">Bentornato</span>
                        <h2 class="mb-3">Aggiungi Auto</h2>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-12 py-4">
                        <h4 class="text-center">Immagini Auto</h4>
                        <div id="dropzone" class="dropzone"></div>
                    </div>
                    <div class="col-12 col-md-6 order-1 order-md-0">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Informazioni Tecniche</h4>
                                <div class="form-group">
                                    <label for="targaVeicolo" class="bmd-label-floating lead text-info">Targa Auto</label>
                                    <input class="form-control" type="text" name="targaVeicolo" required="true" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <label for="vinVeicolo" class="bmd-label-floating lead text-info">Vin Auto</label>
                                    <input class="form-control" type="text" name="vinVeicolo" required="true" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <label for="categoriaVeicolo" class="bmd-label-floating lead text-info">Categoria Veicolo</label>
                                    <select class="selectpicker" data-width="100%" name="categoriaVeicolo" data-live-search="true" title="Categoria Veicolo">
                                        <option value="1" data-tokens="ketchup mustard">Auto</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="meseImmatricolazione" class="bmd-label-floating lead text-info">Mese Immatricolazione</label>
                                    <select class="selectpicker" data-width="100%" name="meseImmatricolazione" title="Mese Immatricolazione" data-live-search="true">
                                        <option value="1">Gennaio  </option>
                                        <option value="2">Febbraio</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Aprile</option>
                                        <option value="5">Maggio</option>
                                        <option value="6">Giugno</option>
                                        <option value="7">Luglio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Settembre</option>
                                        <option value="10">Ottobre</option>
                                        <option value="11">Novembre</option>
                                        <option value="12">Dicembre</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="AnnoImmatricolazione" class="bmd-label-floating lead text-info">Anno Immatricolazione</label>
                                    <input class="form-control" type="number" name="AnnoImmatricolazione" min="1900" required="true" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <label for="produttoreVeicolo" class="bmd-label-floating lead text-info">Produttore Veicolo</label>
                                    <select title="Produttore Veicolo" class="selectpicker" data-width="100%" name="produttoreVeicolo" data-live-search="true">
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="modelloVeicolo" class="bmd-label-floating lead text-info">Modello Veicolo</label>
                                    <select title="Modello Veicolo" class="selectpicker" data-width="100%" name="modelloVeicolo" data-live-search="true">
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="allestimentoVeicolo" class="bmd-label-floating lead text-info">Allestimento Veicolo</label>
                                    <input class="form-control" type="text" name="allestimentoVeicolo" required="true" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <label for="kmVeicolo" class="bmd-label-floating lead text-info">Chilometraggio (km)</label>
                                    <input class="form-control" type="number" name="kmVeicolo" min="0" required="true" aria-required="true">
                                </div>

                                <h4 class="text-center">Elementi Facoltativi</h4>
                                <div class="form-group">
                                    <label for="carburanteVeicolo" class="bmd-label-floating lead text-info">Carburante Veicolo</label>
                                    <select title="Carburante Veicolo" class="selectpicker" data-width="100%" name="carburanteVeicolo" >
                                        @foreach (\App\Fuel::getall() as $item)
                                        <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="coloreVeicolo" class="bmd-label-floating lead text-info">Colore Veicolo</label>
                                    <select title="Colore Veicolo" class="selectpicker" data-width="100%" name="coloreVeicolo">
                                        @foreach (\App\Color::getColors() as $item)
                                    <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="cambioVeicolo" class="bmd-label-floating lead text-info">Cambio Veicolo</label>
                                    <select title="Trasmissione Veicolo" class="selectpicker" data-width="100%" name="cambioVeicolo" >
                                        @foreach (\App\Transmission::getall() as $item)
                                        <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="classeVeicolo" class="bmd-label-floating lead text-info">Classe emissioni Veicolo</label>
                                    <select title="Classe emissioni" class="selectpicker" data-width="100%" name="classeVeicolo" >
                                        @foreach (\App\Grade::getall() as $item)
                                        <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="postiVeicolo" class="bmd-label-floating lead text-info">Posti Veicolo</label>
                                    <select title="Posti Veicolo" class="selectpicker" data-width="100%" name="postiVeicolo" >
                                        @foreach (\App\Seat::getall() as $item)
                                        <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="porteVeicolo" class="bmd-label-floating lead text-info">Porte Veicolo</label>
                                    <select title="Porte Veicolo" class="selectpicker" data-width="100%" name="porteVeicolo" >
                                        @foreach (\App\Door::getall() as $item)
                                        <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 order-0 order-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Informazioni Generali</h4>
                                <div class="form-group">
                                    <label for="titoloAnnuncio" class="bmd-label-floating lead text-info">Titolo Annuncio</label>
                                    <input class="form-control" type="text" name="titoloAnnuncio" required="true" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <label for="testoAnnuncio" class="bmd-label-floating lead text-info">Descrizione dell'annuncio</label>
                                    <textarea class="form-control" name="testoAnnuncio" rows="8"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="prezzoVeicolo" class="bmd-label-floating lead text-info">Prezzo</label>
                                    <input class="form-control" type="number" name="prezzoVeicolo" min="0" required="true" aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 col-12 order-2 text-center">
                        <input type="submit" class="px-4 btn btn-lg btn-primary" value="Invia">
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection

@push('jsCustom')

@endpush
