
<button type="button" class="py-4 mx-4 rounded-pill btn btn-info btn-lg w-100 mb-3 text-uppercase" data-toggle="modal" data-target=".bd-example-modal-xl">
    <h4 class="text-white">
        <i class="fas fa-user-edit"></i> Modifica
    </h4>
</button>




<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="container-fluid">

                <form action="{{route('admin.modificaAuto',['id' => $car->id])}}" method="post">
                    @csrf
                    @method('PUT')


                    <div class="row py-5">

                        <div class="col-12 text-center">
                            <h2>Modifica Auto</h2>
                        </div>

                        <div class="col-12 text-center">
                            <div class="form-group">
                                <label for="targaVeicolo" class="bmd-label-floating lead text-info">Titolo</label>
                                <input type="text" required class="form-control2" name="titolo" id="titolo">
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <div class="form-group">
                                <label for="targaVeicolo" class="bmd-label-floating lead text-info">Targa Auto</label>
                                <input type="text" required class="form-control2" name="targaVeicolo" id="targaVeicolo">
                            </div>

                            <div class="form-group">
                                <label for="vinVeicolo" class="bmd-label-floating lead text-info">Vin Auto</label>
                                <input type="text" class="form-control2" name="vinVeicolo" id="vinVeicolo" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">
                                <label for="categoriaVeicolo" class="bmd-label-floating lead text-info">Tipologia Veicolo</label>
                                <select value="3" name="categoriaVeicolo" id="categoriaVeicolo" class="form-control2 input-lg">
                                    <option value="0">Seleziona Tipologia</option>
                                    @foreach(\App\Typology::all() as $producer)
                                        <option value="{{$producer->id}}">{{$producer->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="prezzoVeicolo" class="bmd-label-floating lead text-info">Prezzo</label>
                                <input type="number" required class="form-control2" name="prezzoVeicolo" id="prezzoVeicolo" value="{{$car->price}}">
                            </div>


                        </div>

                        <div class="div-12 col-md-3">
                            <div class="form-group">
                                <label for="meseImmatricolazione" class="bmd-label-floating lead text-info">Mese Immatricolazione</label>
                                <select name="meseImmatricolazione" id="meseImmatricolazione" class="form-control2 input-lg">
                                    <option value="1">Gennaio</option>
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
                                <input type="number" required class="form-control2" name="AnnoImmatricolazione" min="1900" id="AnnoImmatricolazione">
                            </div>

                            <div class="form-group">
                                <label for="kmVeicolo" class="bmd-label-floating lead text-info">Chilometraggio (km)</label>
                                <select required name="kmVeicolo" id="kmVeicolo" class="form-control2 input-lg">
                                    <option value="">Seleziona Kilometraggio</option>
                                    @foreach(\App\Kilometers::all() as $producer)
                                        <option value="{{$producer->id}}">{{$producer->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <div class="form-group">
                                <label for="producer" class="bmd-label-floating lead text-info">Produttore Veicolo </label>
                                <select name="producer" id="producer" class="form-control2 input-lg">
                                    <option value="0">Nessuna Modifica</option>
                                    @foreach(\App\Producer::all()  as $producer)
                                        <option value="{{$producer->id}}">{{$producer->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exemplary" class="bmd-label-floating lead text-info">Modello Veicolo</label>
                                <select name="exemplary" id="exemplary" class="form-control2 input-lg">
                                    <option value="0">Nessuna Modifica</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="preparation" class="bmd-label-floating lead text-info">Allestimento Veicolo</label>
                                <select name="preparation" id="preparation" class="form-control2 input-lg">
                                    <option value="0">Nessuna Modifica</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <div class="form-group">
                                <label for="carburanteVeicolo" class="bmd-label-floating lead text-info">Carburante Veicolo</label>
                                <select title="Carburante Veicolo" class="form-control2 input-lg" data-width="100%" name="carburanteVeicolo" id="carburanteVeicolo">
                                    @foreach (\App\Fuel::getall() as $item)
                                        <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="coloreVeicolo" class="bmd-label-floating lead text-info">Colore Veicolo</label>
                                <select title="Colore Veicolo" class="form-control2 input-lg" data-width="100%" name="coloreVeicolo" id="coloreVeicolo">
                                    @foreach (\App\Color::getColors() as $item)
                                        <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="cambioVeicolo" class="bmd-label-floating lead text-info">Cambio Veicolo</label>
                                <select title="Trasmissione Veicolo" class="form-control2 input-lg" data-width="100%" name="cambioVeicolo" id="cambioVeicolo">
                                    @foreach (\App\Transmission::getall() as $item)
                                        <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="classeVeicolo" class="bmd-label-floating lead text-info">Classe emissioni Veicolo</label>
                                <select title="Classe emissioni" class="form-control2 input-lg" data-width="100%" name="classeVeicolo" id="classeVeicolo">
                                    @foreach (\App\Grade::getall() as $item)
                                        <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="postiVeicolo" class="bmd-label-floating lead text-info">Posti Veicolo</label>
                                <select title="Posti Veicolo" class="form-control2 input-lg" data-width="100%" name="postiVeicolo" id="postiVeicolo">
                                    @foreach (\App\Seat::getall() as $item)
                                        <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="porteVeicolo" class="bmd-label-floating lead text-info">Porte Veicolo</label>
                                <select title="Porte Veicolo" class="form-control2 input-lg" data-width="100%" name="porteVeicolo" id="porteVeicolo">
                                    @foreach (\App\Door::getall() as $item)
                                        <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="testoAnnuncio" class="bmd-label-floating lead text-info">Descrizione dell'annuncio</label>
                                <textarea class="form-control2" name="testoAnnuncio" id="testoAnnuncio" rows="8"></textarea>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <input type="submit" class="py-4 mx-4 rounded-pill btn btn-info btn-lg mb-3 text-uppercase" value="Completa Modifica">
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>
