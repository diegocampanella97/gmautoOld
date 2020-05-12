<div class="container-fluid" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="row py-5">
        <div class="col-12 col-md-3 border">

            <div class="text-center py-5">
                <button class="btn btn-xl btn-primary py-3 px-5 btn-success btn-lg" wire:click.debounce.500ms="insertCar">
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

        </div>

        <div class="col-12 col-md-9 border">
            <div class="container-fluid">
                <div class="row">
                    @if(!is_null($item))

                        @foreach($item as $car)
                            @include('module.cardCar')
                        @endforeach
                    @else

                    <div class="col-12 py-2 text-center">
                            <svg height="256" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg"><path d="M24 44v16c0 1.1-.9 2-2 2h-4c-1.1 0-2-.9-2-2V44z" fill="#cf9e76"/><path d="M24 40v4h-8v-4c0-.85.27-1.65.73-2.3 1.06.2 2.15.3 3.27.3s2.21-.1 3.27-.29c.46.65.73 1.44.73 2.29z" fill="#ccd1d9"/><path d="M36.98 14h-4.33C30.41 9.27 25.58 6 20 6 12.27 6 6 12.27 6 20s6.27 14 14 14c5.58 0 10.41-3.27 12.65-8h4.33c-.79 2.24-2.01 4.27-3.56 6H33c-.55 0-1 .45-1 1v.42c-2.41 2.16-5.41 3.68-8.73 4.28v.01c-1.06.19-2.15.29-3.27.29s-2.21-.1-3.27-.3C8.35 36.17 2 28.82 2 20c0-9.94 8.06-18 18-18 7.84 0 14.5 5.01 16.98 12z" fill="#fcd770"/><path d="M32.65 14H25c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h7.65c-2.24 4.73-7.07 8-12.65 8-7.73 0-14-6.27-14-14S12.27 6 20 6c5.58 0 10.41 3.27 12.65 8z" fill="#69d6f4"/><path d="M57 50c-7.681-.179-20.582 0-28 0-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h28c.55 0 1-.45 1-1V51c0-.55-.45-1-1-1zM61 32.079c-7.681-.179-20.582 0-28 0-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h28c.55 0 1-.45 1-1v-10c0-.55-.45-1-1-1zM61 14c-10.905-.006-25.863 0-36 0-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h36c.55 0 1-.45 1-1V15c0-.55-.45-1-1-1z" fill="#e6e9ed"/><g><path d="M61 27c1.103 0 2-.897 2-2V15c0-1.103-.897-2-2-2H37.653C34.795 5.797 27.799 1 20 1 9.523 1 1 9.523 1 20c0 8.843 6.082 16.273 14.276 18.381C15.099 38.898 15 39.442 15 40v20c0 1.654 1.346 3 3 3h4c1.654 0 3-1.346 3-3V40c0-.555-.097-1.096-.273-1.611 2.246-.577 4.37-1.559 6.273-2.913V43c0 1.103.897 2 2 2h28c1.103 0 2-.897 2-2V33c0-1.103-.897-2-2-2H35.481c.884-1.24 1.602-2.581 2.164-4zm-36 0h5.948c-2.369 3.688-6.505 6-10.948 6-7.168 0-13-5.832-13-13S12.832 7 20 7c4.443 0 8.579 2.312 10.948 6H25c-1.103 0-2 .897-2 2v10c0 1.103.897 2 2 2zm0-2V15h12v10zm36.001 0H39V15h22zM22 61h-4c-.551 0-1-.449-1-1V45h6v15c0 .551-.449 1-1 1zm1-21v3h-6v-3c0-.426.095-.838.265-1.22.896.13 1.804.22 2.735.22.923 0 1.834-.086 2.736-.217.17.381.264.792.264 1.217zm10-7h14v10H33zm28 10H49V33h12zM32.937 31.006c-1.052.034-1.897.879-1.93 1.932C27.935 35.553 24.048 37 20 37c-9.374 0-17-7.626-17-17S10.626 3 20 3c6.711 0 12.765 3.965 15.493 10h-2.234C30.676 8.123 25.546 5 20 5 11.729 5 5 11.729 5 20s6.729 15 15 15c5.546 0 10.676-3.123 13.259-8h2.228c-.653 1.447-1.511 2.786-2.55 4.006z"/><path d="M57 19h2v2h-2zM53 19h2v2h-2zM49 19h2v2h-2zM45 19h2v2h-2zM41 19h2v2h-2zM34.293 16.293L29 21.586l-1.293-1.293-1.414 1.414L29 24.414l6.707-6.707zM57 49H29c-1.103 0-2 .897-2 2v10c0 1.103.897 2 2 2h28c1.103 0 2-.897 2-2V51c0-1.103-.897-2-2-2zm-28 2h12v10H29zm14 10V51h14l.001 10z"/><path d="M53 55h2v2h-2zM49 55h2v2h-2zM45 55h2v2h-2zM35 37h2v2h-2zM39 37h2v2h-2zM43 37h2v2h-2zM38.293 52.293L33 57.586l-1.293-1.293-1.414 1.414L33 60.414l6.707-6.707zM51.293 40.293l1.414 1.414L55 39.414l2.293 2.293 1.414-1.414L56.414 38l2.293-2.293-1.414-1.414L55 36.586l-2.293-2.293-1.414 1.414L53.586 38z"/></g></svg>
                            <p class="py-3 lead">
                                Cerca tra le nostre auto quella che fa per te! 
                            </p>
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
