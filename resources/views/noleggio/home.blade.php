@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contatti <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Contatti</h1>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12	featured-top">
                <div class="row no-gutters">
                      <div class="col-md-4 d-flex align-items-center">
                          <form action="#" class="request-form ftco-animate bg-primary">
                      <h2>Trova la tua auto</h2>
                            <div class="form-group">
                                <label for="" class="label">Località di ritiro</label>
                                <input type="text" class="form-control" placeholder="Città, aeroporto, stazione etc..">
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Località di consegna</label>
                                <input type="text" class="form-control" placeholder="Città, aeroporto, stazione etc..">
                            </div>
                            <div class="d-flex">
                                <div class="form-group mr-2">
                        <label for="" class="label">Data di ritiro</label>
                        <input type="text" class="form-control" id="book_pick_date" placeholder="Data">
                      </div>
                      <div class="form-group ml-2">
                        <label for="" class="label">Data di consegna</label>
                        <input type="text" class="form-control" id="book_off_date" placeholder="Data">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="label">Orario di ritiro</label>
                    <input type="text" class="form-control" id="time_pick" placeholder="Orario">
              </div>
              

                    <div class="form-group">
                      <input type="submit" value="Cerca" class="btn btn-secondary py-3 px-4">
                    </div>
                        </form>
                      </div>
                      <div class="col-md-8 d-flex align-items-center">
                          <div class="services-wrap rounded-right w-100">
                              <h3 class="heading-section mb-4">Il modo migliore di noleggiare l'auto</h3>
                              <div class="row d-flex mb-4">
                          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                              <div class="text w-100">
                                <h3 class="heading mb-2">Trova l'auto ideale</h3>
                            </div>
                            </div>      
                          </div>
                          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                              <div class="text w-100">
                                <h3 class="heading mb-2">Prenota online</h3>
                              </div>
                            </div>      
                          </div>
                          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
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

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Prenota</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-2.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Subaru</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Prenota</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-3.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Prenota</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-4.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Prenota</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-5.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Subaru</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Prenota</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-6.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Prenota</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-7.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Prenota</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-8.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Subaru</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Prenota</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-9.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Prenota</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-10.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Prenota</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-11.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Subaru</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Prenota</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-12.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Prenota</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Scopri</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
</section>

<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 heading-section heading-section-white ftco-animate">
        <h2 class="mb-3">Scopri le nostre offerte per il noleggio di furgoni</h2>
        <a href="#" class="btn-prev btn-primary btn-lg">Richiedi preventivo</a>
      </div>
            </div>
        </div>
    </section>

<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Testimonianze</span>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">Marketing Manager</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url(images/person_2.jpg)">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">Interface Designer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url(images/person_3.jpg)">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">UI Designer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">Web Developer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">System Analyst</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection