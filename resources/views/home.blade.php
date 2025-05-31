@extends('layouts.main')


@push('title')
<title>Home Page </title>
@endpush
@section('content')
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/slider1.jpg" class="d-block w-100" alt="slider 1">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slider2.jpg" class="d-block w-100" alt="slider 2">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slider3.jpg" class="d-block w-100" alt="slider 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--product -->
<section class="my-5">
  <div class="container">
    <div class="d-flex">
  <div class="p-2 flex-grow-1">
    <h2 class="mb-3">Top Deals</h2>

  </div>
  
  <div class="p-2"><a href="#" class="btn btn-primary">View All </a></div>
</div>
    <div class="row">
      <div class="col-lg-3">
        <div class="card" >
  <img src="assets/images/products/product1.png" class="card-img-top border" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Shoes</h5>
    <h3 class="card-title text-center">rs 500</h3>
  </div>
</div>
      </div>
        <div class="col-lg-3">
        <div class="card" >
  <img src="assets/images/products/product1.png" class="card-img-top border" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Shoes</h5>
    <h3 class="card-title text-center">rs 500</h3>
  </div>
</div>
      </div>
        <div class="col-lg-3">
        <div class="card" >
  <img src="assets/images/products/product1.png" class="card-img-top border" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Shoes</h5>
    <h3 class="card-title text-center">rs 500</h3>
  </div>
</div>
      </div>
        <div class="col-lg-3">
        <div class="card" >
  <img src="assets/images/products/product1.png" class="card-img-top border" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Shoes</h5>
    <h3 class="card-title text-center">rs 500</h3>
  </div>
</div>
      </div>
    </div>
  </div>
</section>

@endsection
