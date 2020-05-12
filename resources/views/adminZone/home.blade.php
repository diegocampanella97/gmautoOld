@extends('layouts.app')

@section('content')
    <x-headerComponent title="Area Riservata" img=""/>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center">
                    <h3>
                        Gestione Auto
                    </h3>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <a href="{{route('admin.aggiungiAuto')}}" class="py-4 mx-4 rounded-pill btn btn-info btn-lg mb-3 text-uppercase">
                        <h4 class="text-white">
                            <i class="fas fa-user-edit"></i> Aggiungi Auto
                        </h4>
                    </a>
                </div>

                <div class="col-12 col-md-3 text-center">
                    <a href="{{route('admin.listaAuto')}}" class="py-4 mx-4 rounded-pill btn btn-info btn-lg mb-3 text-uppercase">
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

                <div class="col-12 col-md-3 text-center">
                    <a href="{{route('admin.listaClienti')}}" class="py-4 mx-4 rounded-pill btn btn-info btn-lg mb-3 text-uppercase">
                        <h4 class="text-white">
                            <i class="fas fa-user-edit"></i> Lista Clienti
                        </h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection