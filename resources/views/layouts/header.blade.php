<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Demo-Project</title> -->
     @stack('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
 <!-- Google Font: Lato -->
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">


</head>
  <body>
 <nav class="navbar navbar-expand-lg theme-navbar">
  <div class="container">
    <a class="navbar-brand" href="/"><h1>E-Commerce</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div >
      
      <form class="d-flex" role="search">
        <div class="input-group">
        <input class="form-control form-control-sm " type="search" placeholder="Search for products" aria-label="Search"/>
        <button class="btn btn-light btn-sm" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
      </form>

      

    </div>
    <div>


      <a href="/become-a-seller" class="text-decoration-none">Become a Seller</a>
       <a href="#" class="btn btn-success btn-sm"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
       @guest
       <a href="/login" class="btn btn-primary btn-sm"><i class="fa-solid fa-user"></i>Login</a>
       <a href="/register" class="btn btn-secondary btn-sm"><i class="fa-solid fa-user"></i>Sign up</a>
        @endguest
       @auth
       <a href="/dashboard" class="btn btn-secondary btn-sm"><i class="fa-solid fa-user"></i>Profile</a>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </button>
    </form>
       @endauth
      <a href="admin/login" class="btn btn-danger btn-sm" >Admin</a>


       

    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg theme-navbar-light">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="nav">
        <li class="nav-item ">
          <a class="nav-link active text-dark"  href="{{url('category/category1/1')}}">Mobile</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-dark"  href="{{url('category/category1/1')}}">Fashion</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-dark"  href="{{url('category/category1/1')}}">Electronics</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>