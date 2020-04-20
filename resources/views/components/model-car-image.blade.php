<button type="button" class="py-4 mx-4 rounded-pill btn btn-danger btn-lg w-100 mb-3 text-uppercase" data-toggle="modal" data-target=".photogallery">
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
                @foreach($car->images as $image)
                    <div class="row">
                        <div class="col-12">
                            <div class="container py-4">
                                <div class="row d-flex align-items-center">
                                    <div class="col-6">
                                        <img width="500px" src="{{Storage::url($image->filePath)}}" alt="">
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <a class="minWidth m-2 rounded-pill btn btn-danger btn-lg text-uppercase text-white">
                                            <i class="fas fa-trash-alt"></i>
                                            <br> Cancella
                                        </a>
                                        <a class="minWidth m-2 rounded-pill btn btn-warning btn-lg text-uppercase text-white">
                                            <i class="fas fa-star"></i>
                                            <br> Metti in risalto
                                        </a>
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
