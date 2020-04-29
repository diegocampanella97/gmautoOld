<div class="py-4">
    <div class="container mb-4">
        <div class="row">
            <div class="col form-inline">
                Per Pagina: &nbsp;
                <select wire:model="perPage" class="form-control">
                    <option>10</option>
                    <option>15</option>
                    <option>25</option>
                </select>
            </div>
    
            <div class="col">
                <input wire:model="search" class="form-control" type="text" placeholder="Search Contacts...">
            </div>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <a wire:click.prevent="sortBy('name')" role="button" href="#">
                            Name
                            @include('module._sort-icon', ['field' => 'name'])
                        </a>
                    </th>
                    <th>
                        <a wire:click.prevent="sortBy('targa')" role="button" href="#">
                            Targa
                            @include('module._sort-icon', ['field' => 'targa'])
                        </a>
                    </th>
                    <th>
                        <a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                            Data Inserimento
                            @include('module._sort-icon', ['field' => 'created_at'])
                        </a>
                    </th>
                    <th>
                        <a wire:click.prevent="sortBy('approved')" role="button" href="#">
                            Stato Auto
                            @include('module._sort-icon', ['field' => 'approved'])
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td>
                            <button wire:click="showDetailCar({{$car->id}})" type="button" class="btn btn-primary" data-toggle="modal" data-target="#car_detail">
                                {{ $car->name }}
                            </button>
                        </td>
                        <td>{{ $car->targa }}</td>
                        <td>{{ $car->created_at }}</td>
                        <td>{{ $car->approved }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if(isSet($item))
        <div id="car_detail" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$item->name}} - {{$item->targa}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                        <div class="modal-body">
                            <div class="container">
                                    <div class="row py-3">
                                        <div class="col-12 col-md-6">
                                            <h2>Dettagli Auto</h2>
                                            <p><span class="bmd-label-floating lead text-info"> Targa: </span>{{$item->targa}}</p>
                                            <p><span class="bmd-label-floating lead text-info"> Produttore: </span>{{$item->preparations->exemplar->producer->name}}</p>
                                            <p><span class="bmd-label-floating lead text-info"> Modello: </span>{{$item->preparations->exemplar->name}}</p>
                                            <p><span class="bmd-label-floating lead text-info"> Allestimento: </span>{{$item->preparations->name}}</p>
                                            <p><span class="bmd-label-floating lead text-info"> Chilometri: </span>{{$item->kilometers->name}}</p>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            @if ($item->images->count() > 0)
                                            <img class="img-fluid" src="{{
                                                Storage::url($item->images[0]->filePath)
                                            }}" alt="{{$item->name}}">
                                            @else
                                            <img alt="placeholder_gmAuto" class="img-fluid" src="/images/placeholder_gmautoveicoli.png">
                                            @endif
                                        </div>
                                    </div>

                            </div>
                        </div>


                    <div class="modal-footer">
                        <a target="_blank" href="{{route('auto.dettaglio',['id' => $item->id])}}" class="btn btn-secondary" >Dettagli</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Chiudi</button>
                    </div>
                </div>
            </div>
        </div>
    @endif



    <div class="row">
        <div class="col">
            {{ $cars->links() }}
        </div>

        <div class="col text-right text-muted">
            Showing {{ $cars->firstItem() }} to {{ $cars->lastItem() }} out of {{ $cars->total() }} results
        </div>
    </div>
</div>