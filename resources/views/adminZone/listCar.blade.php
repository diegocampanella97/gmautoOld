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

<section class="car-list py-5">
    <h4 class="text-center">Lista Auto Approvate</h4>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table" id="listCarApproved">
                    <thead>
                        <tr>
                            <th>Data Aggiunta</th>
                            <th>Nome</th>
                            <th>Produttore</th>
                            <th>Modello</th>
                            <th>Targa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
</section>


<hr class="py-5">


<section class="car-list">
    <h4 class="text-center">Lista Auto da approvare</h4>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>Data Aggiunta</th>
                            <th>Nome</th>
                            <th>Produttore</th>
                            <th>Modello</th>
                            <th>Targa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection

@push('jsCustom')

    <script>
        $(document).ready( function () {


            $('#myTable').DataTable({
                "processing":true,
                "serverSide":true,
                "ajax": "{{route('api.listCarsToApproved')}}",
                "columns": [
                    {
                        data : "updated_at",
                    },
                    {
                        data : "name",
                    },
                    {
                        data : "exemplar.name"
                    },
                    {
                        data : "collection.name"
                    },
                    {
                        data : "targa"
                    },

                ],

                "columnDefs": [ {
                    className: "text-center",
                    "targets": 5,
                    render: function(data, type, row) {
                        return '<a class="mx-2 btn btn-success" href="/auto/usate/' +row['id']+'">'+'Modifica'+'</a>'+
                        '<form action="/{{request()->segment(1)}}/auto/' + row['id'] + '/cancella' + ' " method="POST" style="display:inline">'+
                            '<input type="hidden" name="_method" value="DELETE" />' +
                            '<input type="hidden" name="_token" value="{{csrf_token()}}" />' +
                            '<input type="submit" class="mx-2 btn btn-danger" value="Cancella"/>' +
                        '</form>'+
                        '<form action="/{{request()->segment(1)}}/auto/' + row['id'] + '/approva' + ' " method="POST" style="display:inline">'+
                            '<input type="hidden" name="_token" value="{{csrf_token()}}" />' +
                            '<input type="submit" class="mx-2 btn btn-info" value="Approva"/>' +
                        '</form>'
                    }
                } ]

            });

            $('#listCarApproved').DataTable({
                "processing":true,
                "serverSide":true,
                "ajax": "{{route('api.listCars')}}",
                "columns": [
                    {
                        data : "updated_at",
                    },
                    {
                        data : "name",
                    },
                    {
                        data : "exemplar.name"
                    },
                    {
                        data : "collection.name"
                    },
                    {
                        data : "targa"
                    },

                ],

                "columnDefs": [ {
                    className: "text-center",
                    "targets": 5,
                    render: function(data, type, row) {
                        return '<a class="mx-2 btn btn-success" href="/auto/usate/' +row['id']+'">'+'Modifica'+'</a>'+
                        '<form action="/{{request()->segment(1)}}/auto/' + row['id'] + '/cancella' + ' " method="POST" style="display:inline">'+
                            '<input type="hidden" name="_method" value="DELETE" />' +
                            '<input type="hidden" name="_token" value="{{csrf_token()}}" />' +
                            '<input type="submit" class="mx-2 btn btn-danger" value="Cancella"/>' +
                        '</form>'+
                        '<form action="/{{request()->segment(1)}}/auto/' + row['id'] + '/approva' + ' " method="POST" style="display:inline">'+
                            '<input type="hidden" name="_token" value="{{csrf_token()}}" />' +
                            '<input type="submit" class="mx-2 btn btn-info" value="Disabilita"/>' +
                        '</form>'
                    }
                } ]

            });

        } );


    </script>
    {{-- {{ route('car.detail', ['id'=>row['id']]) }} --}}
@endpush
