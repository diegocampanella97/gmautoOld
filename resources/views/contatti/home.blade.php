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

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
          <div class="col-md-4">
              <div class="info row mb-5">
                <div class="col-md-12">
                    <div class="w-100 p-4 rounded mb-2 d-flex">
                        <div class="icon mr-3">
                            <span class="icon-map-o"></span>
                </div>
                      <p><span>Indirizzo:</span> <a href="https://goo.gl/maps/NrB4rJb2Cu7UY7c9A">S.p 215, 70010 - Turi (BA)</a></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="w-100 p-4 rounded mb-2 d-flex">
                        <div class="icon mr-3">
                            <span class="icon-mobile-phone"></span>
                        </div>
                      <p><span>Telefono:</span> <a href="tel://1234567920">808 891 6567</a></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="w-100 p-4 rounded mb-2 d-flex">
                        <div class="icon mr-3">
                            <span class="icon-envelope-o"></span>
                        </div>
                      <p><span>Email:</span> <a href="mailto:info@gmautomobili.com">info@gmautomobili.com</a></p>
                    </div>
                </div>
              </div>
        </div>
        <div class="col-md-8 block-9 mb-md-5">
          <form action="#" class="bg-light p-5 contact-form">
            <h2>Inviaci un messaggio</h2>
            <p class="text pb-3">Non esitare a contattarci per qualunque tipo di informazione riguardante i nostri servizi.</p>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nome ">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Oggetto">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Messagio"></textarea>
            </div>
            <span>
              <label><input class="cbx" type="checkbox" name="your-consent" value="1" aria-invalid="false">
                <span class="item-label">Acconsento al <a style="color:#333" href="/privacy-policy" target="_blank">trattamento dei dati personali</a></span></label></span>
            <div class="form-group">
                <input type="submit" value="Invia" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div id="map" class="bg-white"></div>
          </div>
      </div>
    </div>
  </section>
@endsection