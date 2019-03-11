<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    {{--style--}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" defer></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<style>
    .resize-caurosel{
        height: 500px;
    }



</style>
</head>
<body>
<nav class="navbar navbar-dark bg-primary navbar-expand-lg">
    <a class="navbar-brand d-flex flex-fill" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Add Car For Rent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Dropdown
                </a>
                <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">1
                    <i class="fas fa-envelope"></i>
                </a>
            </li>
            <li class="nav-item avatar dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0" style="width:40px; height: 40px;" alt="avatar image">
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<br>
{{--<div class="container-fluid">--}}
    {{--<div class="bd-example">--}}
        {{--<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">--}}
            {{--<ol class="carousel-indicators">--}}
                {{--<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>--}}
                {{--<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>--}}
                {{--<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>--}}
            {{--</ol>--}}
            {{--<div class="carousel-inner">--}}
                {{--<div class="carousel-item active">--}}
                    {{--<img src="/images/back.jpg" class="d-block w-100 resize-caurosel" alt="...">--}}
                    {{--<div class="carousel-caption d-none d-md-block">--}}
                        {{--<h5>First slide label</h5>--}}
                        {{--<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="carousel-item">--}}
                    {{--<img src="/images/a.jpg" class="d-block w-100 resize-caurosel" alt="...">--}}
                    {{--<div class="carousel-caption d-none d-md-block">--}}
                        {{--<h5>Second slide label</h5>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="carousel-item">--}}
                    {{--<img src="/images/b.jpg" class="d-block w-100 resize-caurosel" alt="...">--}}
                    {{--<div class="carousel-caption d-none d-md-block">--}}
                        {{--<h5>Third slide label</h5>--}}
                        {{--<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">--}}
                {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                {{--<span class="sr-only">Previous</span>--}}
            {{--</a>--}}
            {{--<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">--}}
                {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                {{--<span class="sr-only">Next</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<br>--}}

<div class="container-fluid">
    <div class="row">
    @foreach($cars as $car)
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="blog-card spring-fever" style="background:url() center no-repeat;">
                <div class="title-content">
                    <h3><a href="#">{{$car->model}}</a></h3>
                    <div class="intro"><a href="#">More</a></div>
                </div>
                <div class="card-info">
                   {{$car->type}}
                    <a href="#">Read Article<span class="licon icon-arr icon-black"></span></a>
                </div>
                <div class="utility-info">
                    <ul class="utility-list">
                        <li><i class="far fa-star"></i> <a href="#">2</a></li>
                        <li><i class="far fa-comment-alt"></i> <a href="#">12</a></li>
                        <li><i class="far fa-calendar-alt"></i>{{$car->created_at}}</li>
                        <li><span class="licon icon-tag"></span><a href="#">{{$car->user->full_name}}</a></li>
                    </ul>
                </div>
                <div class="gradient-overlay"></div>
                <div class="color-overlay"></div>
            </div>
        </div>
        @endforeach
    </div>
</div>






{{--<div class="container-fluid">--}}
    {{--<div class="row">--}}
        {{--@foreach($cars as $car)--}}
            {{--<div class="col-4">--}}


                {{--<div class="card" style="width: 18rem;">--}}
                    {{--<img src="..." class="card-img-top" alt="...">--}}
                    {{--<div class="card-body">--}}
                        {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

                    {{--<div class="card-info">--}}
                        {{--{{$car->type}}--}}
                        {{--<a href="#">Read Article<span class="licon icon-arr icon-black"></span></a>--}}
                    {{--</div>--}}
                    {{--<div class="utility-info">--}}
                        {{--<ul class="utility-list">--}}
                            {{--<li><i class="far fa-star"></i> <a href="#">2</a></li>--}}
                            {{--<li><i class="far fa-comment-alt"></i> <a href="#">12</a></li>--}}
                            {{--<li><i class="far fa-calendar-alt"></i>{{$car->created_at}}</li>--}}
                            {{--<li><span class="licon icon-tag"></span><a href="#">{{$car->user->full_name}}</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="gradient-overlay"></div>--}}
                    {{--<div class="color-overlay"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}
{{--</div>--}}















{{--<script>--}}
    {{--$(function(){--}}
        {{--$('.carousel').carousel({--}}
            {{--interval: 2000--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
</body>
</html>
