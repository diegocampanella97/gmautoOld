<div class="py-5">
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
            @include('livewire.table.customerHeader')
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->nome }}</td>
                        <td>{{ $contact->cognome }}</td>
                        <td>{{ $contact->residenza }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->telefono }}</td>
                        <td class="text-center">
                            

                            <button wire:click="showDetailCustomer({{$contact->id}})" type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#clientModal">
                                {{$contact->cars()->count()}}
                            </button>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if(isSet($customer))
        <div id="clientModal" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$customer->nome}} {{$customer->cognome}} | Cliente dal 
                                        <strong>{{$customer->created_at->format('m-d-Y') }}</strong>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal-body">
                        <div class="container">
                            @foreach ($customer->cars as $car)                                
                                <div class="row py-3">
                                    <div class="col-12 col-md-6">
                                        <h2>Dettagli Auto</h2>
                                        <p><span class="bmd-label-floating lead text-info"> Targa: </span>{{$car->targa}}</p>
                                        <p><span class="bmd-label-floating lead text-info"> Produttore: </span>{{$car->preparations->exemplar->producer->name}}</p>
                                        <p><span class="bmd-label-floating lead text-info"> Modello: </span>{{$car->preparations->exemplar->name}}</p>
                                        <p><span class="bmd-label-floating lead text-info"> Allestimento: </span>{{$car->preparations->name}}</p>
                                        <p><span class="bmd-label-floating lead text-info"> Chilometri: </span>{{$car->kilometers->name}}</p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        @if ($car->images->count() > 0)
                                        <img class="img-fluid" src="{{
                                            Storage::url($car->images[0]->filePath)
                                        }}" alt="{{$car->name}}">
                                        @else
                                        <img alt="placeholder_gmAuto" class="img-fluid" src="/images/placeholder_gmautoveicoli.png">
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>


                    <div class="modal-footer">

                    
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-12 text-center">
                                    <a href="mailto:{{$customer->email}}" type="button" class="btn btn-primary">Invia Mail</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    @endif



    <div class="row">
        <div class="col">
            {{ $contacts->links() }}
        </div>

        <div class="col text-right text-muted">
            Mostrando {{ $contacts->firstItem() }} a {{ $contacts->lastItem() }} di {{ $contacts->total() }} risultati
        </div>
    </div>
</div>