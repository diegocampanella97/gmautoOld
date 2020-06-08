@extends('layouts.app')

@section('content')
<x-headerComponent title="FAQ" img=""/>

<div class="container">
    @if(Auth::user())
    <div class="row">
        <div class="col-12 text-center py-2">
            <button type="button" class="text-center btn btn-primary py-3 px-5" data-toggle="modal" data-target="#exampleModal">
                Aggiungi Faq
              </button>
        </div>
    </div>


      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="row py-3 px-3">
                  <div class="col-12">
                      <form method="POST" action="{{route('faq.store')}}">
                          @csrf
                              <div class="form-group">
                                  <label for="testoAnnuncio" class="bmd-label-floating lead text-info">Domanda</label>
                                  <textarea id="summernote" class="summernote form-control" name="request" rows="3"></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="testoAnnuncio" class="bmd-label-floating lead text-info">Risposta</label>
                                  <textarea id="summernote" class="summernote form-control" name="answer" rows="8"></textarea>
                              </div>
                              <div class="form-group text-center">
                                  <button type="submit" class="text-center btn btn-primary py-3 px-5">Conferma Inserimento</button>
                              </div>
                          </form>
                  </div>
              </div>
          </div>
        </div>
      </div>



    @endif

    <div class="row py-4">
        <div class="col-12">
            <div class="accordion" id="faq">

                @foreach($faqs as $faq)
                    <x-card-f-a-q :faq="$faq" :number="$loop->iteration"/>
                @endforeach
                

              </div>
        </div>
    </div>
</div>
@endsection