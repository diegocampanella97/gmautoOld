<section class="">@extends('layouts.app')

@section('content')

@endsection

    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-12	featured-top">
          <div class="row no-gutters">
            <div class="col-md-4 d-flex align-items-center">
                <form action="{{ route('noleggio.invia') }}" method="POST" class="request-form ftco-animate bg-primary">
                @csrf
                    <h2>Noleggia la tua auto</h2>

                    @if (Session::get('flag')!=null)
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{Session::get('flag')}}</li>
                        </ul>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                        <div class="form-group" >
                          <label for="" class="label">Nome</label>
                          <input type="text" class="form-control" name="name" value="{{old('name')}}" id="book_pick_date2" placeholder="Nome">
                        </div>

                        <div class="form-group" >
                          <label for="" class="label">email</label>
                          <input type="email" class="form-control" name="email" value="{{old('email')}}" id="book_pick_date2" placeholder="Email">
                        </div>

                        <div class="form-group" >
                            <label for="" class="label">Data di ritiro</label>
                            <input type="date" min="{{ Carbon\Carbon::now()->add(1, 'day')->format('Y-m-d') }}" max="{{ Carbon\Carbon::now()->add(1, 'year')->format('Y-m-d') }}" class="form-control" name="dataRitiro" id="book_pick_date2" placeholder="Data">
                        </div>

                        <div class="form-group">
                            <label for="" class="label">Data di consegna</label>
                            <input type="date" min="{{ Carbon\Carbon::now()->add(1, 'day')->format('Y-m-d') }}" max="{{ Carbon\Carbon::now()->add(1, 'year')->format('Y-m-d') }}" class="form-control" name="dataConsegna" id="book_off_date2" placeholder="Data">
                        </div>

                    <div class="form-group">
                        <label for="" class="label">Messaggio</label>
                    <textarea class="form-control" name="messaggio" rows="3">{{old('messaggio')}}</textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Invia Messaggio" class="btn btn-secondary py-3 px-4">
                      </div>
                </form>
            </div>
            <div class="col-md-8 d-flex align-items-center">
                <div class="services-wrap rounded-right w-100">
                    <h4 class="heading-section mb-4">Guidare senza pensieri si può</h4>
                    <div class="row d-flex mb-4">

                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-seat-belt"></span>
                              </div>
                              <div class="text w-100">
                                <h3 class="heading mb-2">Pianifica una vacanza</h3>
                              </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-gears"></span>
                              </div>
                              <div class="text w-100">
                                <h3 class="heading mb-2">Verifica le date</h3>
                              </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-car-key"></span>
                              </div>
                              <div class="text w-100">
                                <h3 class="heading mb-2">Ritira in concessonario</h3>
                              </div>
                            </div>
                          </div>

                    </div>
                </div>
            </div>
                  </div>
            </div>
      </div>
</section>
