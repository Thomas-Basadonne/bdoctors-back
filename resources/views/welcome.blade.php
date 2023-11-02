@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    
    @if (Auth::check())
    <!-- L'utente ha effettuato l'accesso -->
    <div class="text-center">
        <p class="fs-2">Benvenuto, <span class="fw-bold">{{ Auth::user()->name }}!</span></p>
    </div>
    @else
        <!-- L'utente non ha effettuato l'accesso -->
        <div class="text-center mb-4">
            <a href="{{ route('login') }}" class="btn btn-primary mx-2">Accedi</a>
            <span>oppure</span> 
            <a href="{{ route('register') }}" class="btn btn-primary mx-2">Entra a far parte del team!</a>
        </div>
    @endif

    
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/11661531/pexels-photo-11661531.jpeg?auto=compress&cs=tinysrgb&w=1500" class="d-block w-75 mx-auto" alt="...">
            <div class="carousel-caption d-none d-md-block rounded">
              <h5 class="fw-bold">Eccellenza in chirurgia</h5>
              <p class="fw-bold mx-5">I nostri dottori altamente qualificati lavorano insieme in sala operatoria per garantire la massima precisione. La tua salute è la nostra priorità!.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/5327653/pexels-photo-5327653.jpeg?auto=compress&cs=tinysrgb&w=1500" class="d-block w-75 mx-auto" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="fw-bold">Consulenza medica Personalizzata</h5>
              <p class="fw-bold mx-5">Ogni paziente è unico e i nostri medici lo sanno bene, per questo offriamo consulenze personalizzate per le tue esigenze mediche.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/3845806/pexels-photo-3845806.jpeg?auto=compress&cs=tinysrgb&w=1500" class="d-block w-75 mx-auto" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="fw-bold">La nostra squadra multidisciplinare</h5>
              <p class="fw-bold mx-5">Attraverso la nostra piattaforma puoi trovare una vasta gamma di specialisti. Da chirurghi esperti a dentisti premiati!</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <div class="badge bg-secondary">  
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </div>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <div class="badge bg-secondary">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </div>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    
</div>
@endsection