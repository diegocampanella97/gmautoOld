<div class="container-fluid" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="row py-5">
        <div class="col-12 col-md-3">

            <button wire:click.debounce.500ms="insertCar">Invia</button>
            <div>
                <div class="form-group">
                    <label for="categoriaVeicolo" class="bmd-label-floating lead text-info">Tipologia Veicolo</label>
                    <br>
                        <select wire:model="model" class="form-control2 input-lg">
                            @foreach(\App\Producer::all() as $producer)
                                <option value="{{$producer->id}}">{{$producer->name}}</option>
                            @endforeach
                        </select>
                    </select>
                </div>

            </div>
        </div>

        <div class="col-12 col-md-9">

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
