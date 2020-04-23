<div class="container-fluid" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="row py-5">
        <div class="col-12 col-md-3 border">

            <div class="text-center py-5">
                <button class="btn btn-lg py-3 px-5 btn-success btn-lg" wire:click.debounce.500ms="insertCar">
                    Invia Ricerca
                </button>
            </div>

            <x-form-select model="tipology" title="Tipologia" :listValue="\App\Typology::all()" />
            <x-form-select model="kilometers" title="Kilometri" :listValue="\App\Kilometers::all()" />
            tipology



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
