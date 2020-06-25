@extends('layouts.app')

@section('content')
<x-headerComponent title="Trasporto disabili in carrozzina" img=""/>


<section>
  <div class="container py-4">
      <div class="fadeInUp ftco-animated row">
        <div class="col-12 col-md-6 order-0 order-md-0">
          <p>Gm Autoveicoli offre il <strong>noleggio a breve o a medio termine</strong> di mezzi allestiti per trasporto disabili: è una soluzione vantaggiosa quando hai necessità di trasportare persone diversamente abili in carrozzina, da noi troverai un mezzo allestito e omologato che ti consentirà di farlo in totale indipendenza.</p>
          <p>
            Tutte le prenotazioni possono essere effettuate telefonicamente o compilando il form qui sotto.
          </p>
        </div>
        <div class="col-12 col-md-6 order-1 order-md-1">
          <figure>
            <img src="/images/fiat_doblo_noleggio_disabili.jpg" class="img-fluid" alt="fiat doblo rampa disabili">
          </figure>
        </div>
      </div>
    </div>
</section>
@include('module.contact')
@endsection
