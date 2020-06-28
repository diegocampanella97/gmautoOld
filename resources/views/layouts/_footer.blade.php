  <!-- loader -->
  {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5 d-flex align-items-center">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <div class="ftco-heading-2">
              <img width="100px" class="img-responsive" src="/images/gm_logo_white.png" alt="logo_gmAutoveicoli" id="">
            </div>
            <div class="block-23 py-3">
              <ul>
                <li><a href="#"><span class="icon icon-map-marker"></span><span class="text">S.p 215, 70010 - Turi (BA)</span></a></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">808 891 6567</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@gmautomobili.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Informazioni</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Chi siamo</a></li>
              <li><a href="#" class="py-2 d-block">Servizi</a></li>
              <li><a href="#" class="py-2 d-block">Noleggio</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Maggiori informazioni</h2>

            
            <ul class="list-unstyled">
            <li><a href="{{route('faq.index')}}" class="py-2 d-block">FAQ</a></li>
              <li><a href="{{route('termini')}}" class="py-2 d-block">Termini e Condizioni</a></li>
              <li><a href="{{route('contatti')}}" class="py-2 d-block">Contattaci</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> GM Automobili | P.iva 05829820728 | <a target="_blank" href="https://www.iubenda.com/privacy-policy/13800230" class="iubenda-white iubenda-embed" title="Privacy Policy ">Privacy Policy</a></p>
          <a href="https://www.instagram.com/gmautomobili/" target="_blank">
            <i class="d-inline icon ion-logo-instagram ion-2x"></i>
          </a>
          <a href="https://www.facebook.com/gmautomobilinoleggio" target="_blank">
            <i class="d-inline icon ion-logo-facebook ion-2x"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>



{{-- <script src="/js/jquery.min.js"></script>
<script src="/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script> --}}
{{-- <script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/jquery.animateNumber.min.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/jquery.timepicker.min.js"></script>
<script src="/js/scrollax.min.js"></script>
<script src="/js/summernote.min.js"></script>
<script src="./js/bootstrap-select.min.js"></script> --}}

<script src="{{ mix('js/bootstrap.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
{{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
<script src="{{ mix('js/app.js') }}"></script>
{{-- <script src="/js/main.js"></script> --}}
<livewire:scripts>