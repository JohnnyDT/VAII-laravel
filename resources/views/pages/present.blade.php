@extends('master')
@section('title', 'present')

@section('content')

    <!-- Text -->
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="h1-style">Fotky</h1>
            <p class="para-style">
                Prehlad zaujimavych fotiek a obrazkov klubu.
            </p>
        </div>
    </div>

    <!-- Carousel -->
    <div class="row row-margin-carousel">
        <div class="col-md-6 offset-md-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/a.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/b.jfif" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/c.jfif" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    </div>

    <!-- Text -->
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <p class="para-style">

            </p>
        </div>
    </div>

@endsection
