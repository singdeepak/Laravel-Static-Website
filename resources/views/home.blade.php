@extends('layout')

@section('content')
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('static/images/two.jpg')}}" class="d-block w-100 h-25" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('static/images/three.jpg')}}" class="d-block w-100 h-25" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('static/images/one.jpg')}}" class="d-block w-100 h-25" alt="...">
        </div>
    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>
@endsection