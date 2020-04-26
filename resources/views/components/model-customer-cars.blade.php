<button type="button" class="py-4 mx-4 rounded-pill btn btn-info btn-lg w-100 mb-3 text-uppercase" data-toggle="modal" data-target=".modalCustomers">
    <h4 class="text-white">
        <i class="fas fa-user-edit"></i> Completa Vendita
    </h4>
</button>



<div class="modal fade modalCustomers" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="container-fluid">

                <form action="{{route('admin.modificaAuto',['id' => $car->id])}}" method="post">
                    @csrf
                    @method('PUT')


                    <div class="row py-5">

                        <div class="col-12 text-center">
                            <h2>Dettagli Auto</h2>

                            <p>{{$car->targa}}</p>
                        </div>


                        <div class="col-12 text-center">
                            <h2>Dettagli Cliente</h2>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="targaVeicolo" class="bmd-label-floating lead text-info">Nome</label>
                                <input type="text" required class="form-control2" name="titolo" id="titolo">
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="targaVeicolo" class="bmd-label-floating lead text-info">Cognome</label>
                                <input type="text" required class="form-control2" name="titolo" id="titolo">
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="targaVeicolo" class="bmd-label-floating lead text-info">Email</label>
                                <input type="text" required class="form-control2" name="titolo" id="titolo">
                            </div>
                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>
</div>
