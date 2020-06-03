<button type="button" class="px-5 my-2 rounded-pill btn btn-danger btn-lg text-uppercase" data-toggle="modal" data-target=".photogallery">
    <h4 class="text-white">
        <i class="far fa-images"></i> Immagini
    </h4>
</button>


<div class="modal fade bd-example-modal-xl photogallery" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row pt-2">
                    <div class="col-12 text-center">
                        <h2>Gestione Galleria</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <form method="POST" action="{{@route('photo.add',['id'=>$car->id])}}" enctype="multipart/form-data">
                        @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label class="text-primary" for="">Carica Foto</label>
                                <input type="file" class="minWidth m-2 rounded-pill btn btn-primary btn-lg text-uppercase text-white" name="imgPhoto" id="imgPhoto">
                            </div>
                            <button type="submit" class="minWidth m-2 rounded-pill btn btn-primary btn-lg text-uppercase text-white">
                                <i class="far fa-image"></i><br/>
                                Invia Foto</button>
                        </form>
                    </div>
                </div>


                <hr>
                @foreach($car->images as $image)
                    <div class="row">
                        <div class="col-12">
                            <div class="container py-4">
                                <div class="row d-flex align-items-center">
                                    <div class="col-6">
                                        <img width="500px" src="{{Storage::url($image->filePath)}}" alt="">
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">

                                        <form action="{{route('photo.delete',['id' => $image->id])}}" method="post">
                                            @csrf
                                            <button class="minWidth m-2 rounded-pill btn btn-danger btn-lg text-uppercase text-white">
                                                <i class="fas fa-trash-alt"></i><br/>
                                                Cancella
                                            </button>
                                        </form>

                                        <form action="{{route('photo.rating',['id' => $image->id])}}" method="post">
                                            @csrf
                                            <button class="minWidth m-2 rounded-pill btn btn-{{(is_null($image->order))  ? 'warning' : 'info'}} btn-lg text-uppercase text-white">
                                                <i class="fas fa-star"></i><br/>
                                                {{(is_null($image->order))  ? 'Metti In Risalto' : 'Ordine Normale'}}
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</div>
