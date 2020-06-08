@extends('layouts.app')

@section('content')
<x-headerComponent title="Termini e Condizioni" img=""/>
<div class="container">
    <div class="row">
        <div class="col-12 py-4">
            @if(Auth::user())
                <form action="{{route('admin.editTermini')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="testoAnnuncio" class="bmd-label-floating lead text-info">Modifica Termini e Condizioni</label>
                        <textarea id="summernote" class="form-control" name="testoAnnuncio" rows="80">{{\App\Termini::showTermini()}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="text-center btn btn-primary py-3 px-5">Conferma Modifica</button>
                    </div>
                </form>
            @else

            {!! \App\Termini::showTermini() !!}
            @endif
        </div>
    </div>
</div>
@endsection