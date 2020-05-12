@extends('layouts.app')

@section('content')
<x-headerComponent title="Lista Clienti" img=""/>

<div class="container">
    <div class="row">
        <div class="col-12">
            <livewire:contacts-table/>
        </div>
    </div>
</div>
@endsection