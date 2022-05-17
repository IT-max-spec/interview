@extends('layouts.base')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light p-4">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{ asset('icon/BrandIcon.svg') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" >
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="{{ url('https://github.com/IT-max-spec/interview.git') }}" class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
          </svg></a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<section class="hero my-5 ">
  <div class="container">
    <div class="hero-text mb-5 text-center">
      <h1>Make Great Management Employee With Us</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, mollitia deleniti! Rem corporis velit <br> reprehenderit excepturi, blanditiis  delectus inventore reiciendis voluptatem omnis <br>
      </p>
    </div>

  <div class="hero-action mb-5">
      <div class="d-flex justify-content-center">
        <div class="row">
          <div class="col-auto">  <a href="{{ url('create') }}" class="btn btn-add ">Add Employee</a></div>
          <div class="col-auto">  <a href="{{ url('preview') }}" class="btn btn-add ">View Employee</a></div>
        </div>
    </div>
  </div>

    <div class="hero-image">
      <img src="{{ asset('icon/HeroImage.png') }}" class="img-fluid" alt="ini hero-image" width="1264" height="470.78">
    </div>

  </div>
</section>

@endsection
