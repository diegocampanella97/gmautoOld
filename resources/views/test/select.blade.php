{{-- You can change this template using File > Settings > Editor > File and Code Templates > Code > Laravel Ideal View --}}
@extends('layouts.app')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contatti <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Test</h1>
                </div>
            </div>
        </div>
    </section>

<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h2>Ciao</h2>
        </div>
        <div class="col-12">
            <select name="producer" id="producer" class="form-control input-lg">
                <option value="">Select Preparation</option>
                @foreach($producers as $producer)
                    <option value="{{$producer->id}}}">{{$producer->name}}</option>
                @endforeach
            </select>
            <br />
            <select name="exemplary" id="exemplary" class="form-control input-lg">
                <option value="">Select exemplary</option>
            </select>
            <br />
            <select name="preparation" id="preparation" class="form-control input-lg">
                <option value="">Select preparation</option>
            </select>
        </div>
    </div>
</div>

    @push('jsCustom')
        <script type="text/javascript">
            $(document).ready( () =>
            {
                $('select[name="producer"]').on('change',function(){
                    var countryID = $(this).val();
                    if(countryID)
                    {
                        jQuery.ajax({
                            url : '/exemplaries/' + countryID,
                            type : "GET",
                            dataType : "json",
                            success:function(data)
                            {
                                console.log(data);
                                $('select[name="exemplary"]').empty();
                                $.each(data, function(key,value){
                                    $('select[name="exemplary"]').append('<option value="'+ key +'">'+ value +'</option>');
                                });
                            }
                        });
                    }
                    else
                    {
                        $('select[name="exemplary"]').empty();
                    }
                });

                $('select[name="exemplary"]').on('change',function(){
                    var countryID = $(this).val();
                    if(countryID)
                    {
                        jQuery.ajax({
                            url : '/preparation/' + countryID,
                            type : "GET",
                            dataType : "json",
                            success:function(data)
                            {
                                console.log(data);
                                $('select[name="preparation"]').empty();
                                $.each(data, function(key,value){
                                    $('select[name="preparation"]').append('<option value="'+ key +'">'+ value +'</option>');
                                });
                            }
                        });
                    }
                    else
                    {
                        $('select[name="exemplary"]').empty();
                    }
                });


            });
        </script>
    @endpush


@endsection
