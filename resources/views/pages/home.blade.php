<!-- การเรียกใช้งาน template -->
@extends('layouts.master_template')
@section('title')Home @endsection
@section('content')
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/slide1.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/slide2.jpg')}}" slide" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/slide3.jpg')}}" slide" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-home fa-3x text-success"></i>
            <h1>Home</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, ea totam, ipsum minima amet, cumque obcaecati dicta eius quaerat sunt reprehenderit perspiciatis itaque dolorum unde iste quis? Culpa, earum modi.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-concierge-bell fa-3x text-warning"></i>
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur officiis rerum nam excepturi expedita vitae, explicabo voluptate maiores similique provident neque. Sunt harum doloremque ullam dolorum est ratione distinctio vero?</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-cloud-showers-heavy fa-3x text-danger"></i>
            <h1>Services</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, quae suscipit repellat eum a ut perspiciatis repudiandae ratione laboriosam commodi! Rerum eaque provident iure. Reiciendis quidem quisquam nulla quam non!</p>
        </div>
    </div>
</div>

@endsection
