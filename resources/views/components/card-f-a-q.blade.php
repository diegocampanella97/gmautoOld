<div>
    <div class="card">
        <div class="card-header" >
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$number}}" aria-expanded="true" aria-controls="collapse{{$number}}">
              <p>
                {!! $faq->domanda !!}
              </p>
            </button>
          </h2>
        </div>
    
        <div id="collapse{{$number}}" class="collapse" aria-labelledby="headingOne" data-parent="#faq">
          <div class="card-body">
            {!! $faq->risposta !!}

            @if(Auth::user())
            <button type="button" class="btn btn-primary d-inline-block" data-toggle="modal" data-target="#exampleModalFAQ{{$number}}">
              Modifica FAQ
            </button>
    
            <!-- Modal -->
            <div class="modal fade" id="exampleModalFAQ{{$number}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifica FAQ</h5>
                    <button type="button" class="close" data-dismiss="dal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-12">
                        <form method="POST" action="{{route('faq.update',['id' => $faq->id])}}">
                          @csrf
                              <div class="form-group">
                                  <label for="testoAnnuncio" class="bmd-label-floating lead text-info">Domanda</label>
                                  <textarea id="summernote" class="summernote form-control" name="request" rows="3">
                                    {!! $faq->domanda !!}
                                  </textarea>
                              </div>
                              <div class="form-group">
                                  <label for="testoAnnuncio" class="bmd-label-floating lead text-info">Risposta</label>
                                  <textarea id="summernote" class="summernote form-control" name="answer" rows="8">
                                    {!! $faq->risposta !!}
                                  </textarea>
                              </div>
                              <div class="form-group text-center">
                                  <button type="submit" class="text-center btn btn-primary py-3 px-5">Conferma Inserimento</button>
                              </div>
                          </form>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <form action="{{route('faq.delete',['id' => $faq->id])}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="sumbit" class="btn btn-danger">Cancella FAQ</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @endif
          </div>
        </div>
      </div>



</div>


