<section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
          <div class="col-md-4 d-flex align-items-center bg-primary">
              <div class="info row mb-5">
                <div class="col-md-12">
                  <div class="w-100 p-4 rounded mb-2 d-flex">
                    <h4 class="text-white"><i class="fa fa-quote-left" aria-hidden="true"></i> Professionalità, cortesia e passione per le auto sono alla base del nostro operato <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </h4>
                  </div>
              </div>
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
                            <span class="icon icon-phone"></span>
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
        <div class="col-md-8 block-9 mb-md-5" id="contattiForm">


        <form action="{{route('contattiSubmit')}}" method="POST" class="bg-light p-5 contact-form">
          @csrf
            <h2>Inviaci un messaggio</h2>
            <p class="text pb-3">Non esitare a contattarci per qualunque tipo di informazione riguardante i nostri servizi.</p>
            @if ($errors->any())
                <div class="alert alert-danger py-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="form-group">
              <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Nome">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" value="{{old('email')}}" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" value="{{old('oggetto')}}" name="oggetto" placeholder="Oggetto">
            </div>
            <div class="form-group">
            <textarea id="" cols="30" rows="7" value="" name="messaggio" class="form-control" placeholder="Messaggio">{{old('messaggio')}}</textarea>
            </div>
            <span>
              <label>
                <input class="cbx" type="checkbox" value="1" name="consent" aria-invalid="false">
                <span class="item-label">Acconsento al <a style="color:#333" href="https://www.iubenda.com/privacy-policy/13800230" target="_blank">trattamento dei dati personali</a></span>
              </label>
            </span>
            <div class="form-group">
                <input type="submit" value="Invia" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>