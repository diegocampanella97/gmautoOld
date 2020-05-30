@include('cookieConsent::index')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
  <a class="navbar-brand" href="{{route('home')}}">
    <img width="100px" class="img-responsive" src="/images/gm_logo_white.png" alt="" id="logo_nav">
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

  <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="{{route('noleggio')}}" class="nav-link">Noleggio</a></li>
      <li class="nav-item"><a href="{{route('auto.search')}}" class="nav-link">Auto Usate</a></li>
      <li class="nav-item"><a href="{{route('contatti')}}" class="nav-link">Contatti</a></li>
      {{-- <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Area Riservata</a></li> --}}
      <li class="nav-item">
        <a target="_blank" href="https://www.iubenda.com/privacy-policy/13800230" class="nav-link iubenda-white iubenda-embed" title="Privacy Policy ">Privacy Policy</a>
      </li>
      
      @auth
      <li class="nav-item bg-danger rounded-pill"><a href="{{route('login')}}" class="nav-link">Area Riservata</a></li>
      @endauth

    </ul>
  </div>
  </div>
</nav>
