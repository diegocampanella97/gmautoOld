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
                      <h2>Noleggia la tua auto</h2>

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
                    <label for="" class="label">Messaggio</label>
                    <textarea class="form-control" name="Messaggio" rows="3"></textarea>
                  </div>
              

                    <div class="form-group">
                      <input type="submit" value="Invia Messaggio" class="btn btn-secondary py-3 px-4">
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
      <div class="row d-flex justify-content-between">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5 fadeInUp ftco-animated">
          <span class="subheading">Le nostre offerte</span>
          <h2 class="mb-2">Cosa stai cercando?</h2>
        </div>
        <div class="col-6 col-md-2">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Lorem ipsum</h3>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-2">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Lorem ipsum</h3>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-2">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Lorem ipsum</h3>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-2">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Lorem ipsum</h3>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-2">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Lorem ipsum</h3>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-2">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Lorem ipsum</h3>
            </div>
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
  <a href="#" class="btn-prev btn-primary btn-lg">Richiedi informazioni</a>
</div>
      </div>
  </div>
</section>

<section>
  <div class="container py-4">
    <div class="row">
      <div class="col-12 col-md-6">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="single-feature">
                <img src="img/feature/f1.png" alt="">
                <h4>Shipment Tracking</h4>
                <p>
                The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="single-feature">
                <img src="img/feature/f1.png" alt="">
                <h4>Shipment Tracking</h4>
                <p>
                The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="single-feature">
                <img src="img/feature/f1.png" alt="">
                <h4>Shipment Tracking</h4>
                <p>
                The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="single-feature">
                <img src="img/feature/f1.png" alt="">
                <h4>Shipment Tracking</h4>
                <p>
                The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
              </div>
            </div>
          </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="heading-section ftco-animate fadeInUp ftco-animated">
          <div class="single-feature">
            <img src="img/feature/f1.png" alt="">
            <h2>Shipment Tracking</h2>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod modi tempore minus odio laboriosam exercitationem, possimus non? Nam error praesentium laudantium corporis tempore quidem, quos quasi ab, vel delectus minus.
            </p>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod modi tempore minus odio laboriosam exercitationem, possimus non? Nam error praesentium laudantium corporis tempore quidem, quos quasi ab, vel delectus minus.
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 heading-section heading-section-white ftco-animate">
        <h2 class="mb-3">Frase furgone Carrozzina</h2>
        <a href="{{route('disabile')}}" class="btn-prev btn-primary btn-lg">Richiedi informazioni</a>
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