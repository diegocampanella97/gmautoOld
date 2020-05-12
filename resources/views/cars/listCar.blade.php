@extends('layouts.app')

@section('content')
<x-headerComponent title="Lista Auto" img=""/>



<div class="container">
    <div class="row">
        <div class="col-12">
            <livewire:cars-table/>
        </div>
    </div>
</div>
@endsection