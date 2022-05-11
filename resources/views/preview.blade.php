@extends('layouts.base')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light p-4">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{ asset('icon/BrandIcon.svg') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="{{ url('https://github.com/IT-max-spec/EmployeMe..git') }}" class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
          </svg></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<nav aria-label="breadcrumb" >
    <div class="container py-3 bg-sky text-secondary">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none text-reset">Home</a></li>
            <li class="breadcrumb-item  text-dark" >Preview Employee</li>
          </ol>
    </div>
  </nav>

  <section class="hero mt-5 ">
    <div class="container">
      <div class="hero-text mb-5 text-center">
        <h2>Data Employee</h2>
        <p>Lorem ipsum dolor sit amet consectetur efelit.<br> Nobis, mollitia deleniti! Rem corporis
        </p>
      </div>
    </div>
  </section>


 <section class="data-karyawan mt-3 ">
 <div class="table-responsive container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">School</th>
        <th scope="col">Graduation</th>
        <th scope="col">Hoby</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $dataKaryawan)
      <tr>
        <th scope="row">{{ $dataKaryawan->id }}</th>
        <td>{{ $dataKaryawan->Name }}</td>
        <td>{{ $dataKaryawan->Address }}</td>
        <td>{{ $dataKaryawan->School }}</td>
        <td>{{ $dataKaryawan->Graduation }}</td>
        <td>{{ $dataKaryawan->Hoby }}</td>
        <td>
          <a href="{{ '/show/'.$dataKaryawan->id }}">
            <img src="{{ asset('icon/EditIcon.svg') }}" alt="EditIcon" width="35" height="35">
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
 </div>
</section> 
@endsection
