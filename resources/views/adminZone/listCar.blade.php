@extends('layouts.app')

@push('layouts._style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css"/>
@endpush


@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>area Riservata <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Area Riservata</h1>
        </div>
    </div>
    </div>
</section>


<section class="car-list">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Produttore</th>
                            <th>Modello</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>

</section>

{{request()->segment(2)}}.{{request()->segment(2)}}
@endsection

@push('jsCustom')

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                "responsive" : true,
                "processing":true,
                "serverSide":true,
                "ajax": "{{route('api.listCars')}}",
                "columns": [
                    { "data" : "name"},
                    { "data" : "exemplar.name"},
                    { "data" : "collection.name"},
                    {
                data: null,
                className: "center",
                defaultContent: '<a href="{{route('home')}}" class="editor_edit">Edit</a> / <a href="" class="editor_remove">Delete</a>'
            },
                ]

            });
        } );


        
    </script>
@endpush