<button type="button" class="rounded-pill btn btn-info btn-lg mb-3 text-uppercase" data-toggle="modal" data-target=".modalCustomers">
    <h4 class="text-white">
        <i class="fas fa-user-edit"></i> Completa Vendita
    </h4>
</button>



<div class="modal fade modalCustomers" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="container-fluid">
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
                <hr>
                <form action="{{route('customers.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="car_id" value="{{$car->id}}">
                    <div class="row py-3">
                        <div class="col-12">
                            <h2>Dettagli Cliente</h2>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="nome" class="bmd-label-floating lead text-info">Nome</label>
                                <input type="text" required class="form-control2" name="nome" id="nome">
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="cognome" class="bmd-label-floating lead text-info">Cognome</label>
                                <input type="text" required class="form-control2" name="cognome" id="cognome">
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="residenza" class="bmd-label-floating lead text-info">Residenza</label>
                                <input type="text" required class="form-control2" name="residenza" id="residenza">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="email" class="bmd-label-floating lead text-info">Email</label>
                                <input type="text" required class="form-control2" name="email" id="email">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="telefono" class="bmd-label-floating lead text-info">Telefono</label>
                                <input type="number" required class="form-control2" name="telefono" id="telefono">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <div class="form-group">
                                <button class="py-4 mx-4 rounded-pill btn btn-info btn-lg mb-3 text-uppercase" type="submit">Completa Vendita</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
