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

    <div class="container">
        <div class="row">
            <div class="col-12">
                    <form id="regForm" method="POST" action="{{route('admin.aggiungiAutoRichiesta')}}">
                    @csrf

                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <div class="form-group">
                            <label for="targaVeicolo" class="bmd-label-floating lead text-info">Targa Auto</label>
                            <input type="text" class="form-control" name="targaVeicolo" id="targaVeicolo" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="vinVeicolo" class="bmd-label-floating lead text-info">Vin Auto</label>
                            <input type="text" class="form-control" name="vinVeicolo" id="vinVeicolo" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="categoriaVeicolo" class="bmd-label-floating lead text-info">Tipologia Veicolo</label>
                            <select name="categoriaVeicolo" id="categoriaVeicolo" class="form-control input-lg">
                                <option value="">Seleziona Tipologia</option>
                                @foreach(\App\Typology::all() as $producer)
                                    <option value="{{$producer->id}}">{{$producer->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="prezzoVeicolo" class="bmd-label-floating lead text-info">Prezzo</label>
                            <input type="number" class="form-control" name="prezzoVeicolo" id="prezzoVeicolo" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="testoAnnuncio" class="bmd-label-floating lead text-info">Descrizione dell'annuncio</label>
                            <textarea class="form-control" name="testoAnnuncio" rows="8"></textarea>
                        </div>

                    </div>

                    <div class="tab">
                        <div class="form-group">
                            <label for="meseImmatricolazione" class="bmd-label-floating lead text-info">Mese Immatricolazione</label>
                            <select name="meseImmatricolazione" id="meseImmatricolazione" class="form-control input-lg">
                                <option value="1">Gennaio</option>
                                <option value="2">Febbraio</option>
                                <option value="3">Marzo</option>
                                <option value="4">Aprile</option>
                                <option value="5">Maggio</option>
                                <option value="6">Giugno</option>
                                <option value="7">Luglio</option>
                                <option value="8">Agosto</option>
                                <option value="9">Settembre</option>
                                <option value="10">Ottobre</option>
                                <option value="11">Novembre</option>
                                <option value="12">Dicembre</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="AnnoImmatricolazione" class="bmd-label-floating lead text-info">Anno Immatricolazione</label>
                            <input type="number" class="form-control" name="AnnoImmatricolazione" min="1900" id="AnnoImmatricolazione">
                        </div>

                        <div class="form-group">
                            <label for="kmVeicolo" class="bmd-label-floating lead text-info">Chilometraggio (km)</label>
                            <select name="kmVeicolo" id="kmVeicolo" class="form-control input-lg">
                                <option value="">Seleziona Kilometraggio</option>
                                @foreach(\App\Kilometers::all() as $producer)
                                    <option value="{{$producer->id}}">{{$producer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="form-group">
                            <label for="producer" class="bmd-label-floating lead text-info">Produttore Veicolo </label>
                            <select name="producer" id="producer" class="form-control input-lg">
                                <option value="">Select Preparation</option>
                                @foreach(\App\Producer::all()  as $producer)
                                    <option value="{{$producer->id}}">{{$producer->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exemplary" class="bmd-label-floating lead text-info">Modello Veicolo</label>
                            <select name="exemplary" id="exemplary" class="form-control input-lg">
                                <option value="">Select exemplary</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="preparation" class="bmd-label-floating lead text-info">Allestimento Veicolo</label>
                            <select name="preparation" id="preparation" class="form-control input-lg">
                                <option value="">Select preparation</option>
                            </select>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="form-group">
                            <label for="carburanteVeicolo" class="bmd-label-floating lead text-info">Carburante Veicolo</label>
                            <select title="Carburante Veicolo" class="form-control input-lg" data-width="100%" name="carburanteVeicolo" >
                                @foreach (\App\Fuel::getall() as $item)
                                    <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="coloreVeicolo" class="bmd-label-floating lead text-info">Colore Veicolo</label>
                            <select title="Colore Veicolo" class="form-control input-lg" data-width="100%" name="coloreVeicolo">
                                @foreach (\App\Color::getColors() as $item)
                                    <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="cambioVeicolo" class="bmd-label-floating lead text-info">Cambio Veicolo</label>
                            <select title="Trasmissione Veicolo" class="form-control input-lg" data-width="100%" name="cambioVeicolo" >
                                @foreach (\App\Transmission::getall() as $item)
                                    <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="classeVeicolo" class="bmd-label-floating lead text-info">Classe emissioni Veicolo</label>
                            <select title="Classe emissioni" class="form-control input-lg" data-width="100%" name="classeVeicolo" >
                                @foreach (\App\Grade::getall() as $item)
                                    <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="postiVeicolo" class="bmd-label-floating lead text-info">Posti Veicolo</label>
                            <select title="Posti Veicolo" class="form-control input-lg" data-width="100%" name="postiVeicolo" >
                                @foreach (\App\Seat::getall() as $item)
                                    <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="porteVeicolo" class="bmd-label-floating lead text-info">Porte Veicolo</label>
                            <select title="Porte Veicolo" class="form-control input-lg" data-width="100%" name="porteVeicolo" >
                                @foreach (\App\Door::getall() as $item)
                                    <option value="{{$item->id}}" data-tokens="ketchup mustard">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="form-group">
                            <label for="dropzone" class="bmd-label-floating lead text-info">Immagini Auto</label>
                            <div id="dropzone" class="dropzone"></div>
                        </div>
                    </div>

                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button class="btn btn-lg btn-success" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button class="btn btn-lg btn-success" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>

                </form>
            </div>
        </div>
    </div>




@endsection

@push('cssCustom')
    <style>
        /* Style the form */
        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            padding: 40px;
            width: 100%;
            min-width: 300px;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
    </style>
@endpush

@push('jsCustom')
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            const x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            const x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            let x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if ((y[i].value == "") && (y[i].required==true)) {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            let i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>

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

