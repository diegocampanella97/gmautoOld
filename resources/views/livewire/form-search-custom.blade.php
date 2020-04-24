<div class="container-fluid" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="row py-5">
        <div class="col-12 col-md-3 border">

            <div class="text-center py-5">
                <button class="btn btn-lg py-3 px-5 btn-success btn-lg" wire:click.debounce.500ms="insertCar">
                    Invia Ricerca
                </button>
            </div>

            <x-form-select model="producers" title="Produttori" :listValue="\App\Producer::all()" />
            <x-form-select model="tipologies" title="Tipologia" :listValue="\App\Typology::all()" />
            <hr>
            <x-form-select model="kilometers" title="Chilometri" :listValue="\App\Kilometers::all()" />
            <x-form-select model="fuel" title="Carburante" :listValue="\App\Fuel::all()" />

            <x-form-select model="color" title="Colore " :listValue="\App\Color::all()" />
            <x-form-select model="transmission" title="Cambio " :listValue="\App\Transmission::all()" />
            <x-form-select model="grade" title="Classe Emissioni " :listValue="\App\Grade::all()" />
            <x-form-select model="seat" title="Posti Auto " :listValue="\App\Seat::all()" />
            <x-form-select model="door" title="Porte Auto " :listValue="\App\Door::all()" />


{{--            public $door;--}}


        </div>

        <div class="col-12 col-md-9 border">
            <div class="container-fluid">
                <div class="row">
                    @if(!is_null($item))

                        @foreach($item as $car)
                            @include('module.cardCar')





    {{--                        <livewire:card-car :car="$car">--}}
                        @endforeach

                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
