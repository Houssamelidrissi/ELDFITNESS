@extends('Layout')
<link rel="icon" href="{{ asset('image/ELD.png') }}" type="image/png">
<style>
    body {
        padding: 0;
        margin: 0;
    }

    #d1 {
        background-color: white;
        color: black;
        height: 100vh;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        padding: 30px;
    }

    .app-icon {
        width: 100px;
        border-radius: 20px;
    }

    .icon-section {
        text-align: center;
        margin-bottom: 20px;
    }

    #carouselContainer {
        height: 100vh;
        overflow: hidden;
    }

    #carouselExampleInterval {
        height: 100%;
    }

    .carousel-inner {
        height: 100%;
    }

    .carousel-item {
        height: 100%;
    }

    .carousel-item img {
        object-fit: cover;
        height: 100%;
    }
</style>

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Side 1: Text Content -->
        <div class="col-md-6" id="d1">
            <div class="icon-section">
                <img src="{{asset('image/ELD.png')}}" alt="Application Icon" class="app-icon">
            </div><br />
            You go-to fitness service for a healthier and stronger you. 
            At Elidrissi Fitness, we understand the importance of finding the right exercise routine to maximize your gym sessions. 
            Our mission is to save you time and effort by providing expertly crafted workout programs designed by professional coaches.<br /><br/>

            <span style="text-decoration: underline;">What Sets Us Apart:</span><br /><br/>

            ◉ Tailored Workouts: <br />
            Our service offers personalized exercise programs targeting your entire body, ensuring effective and efficient workouts.<br /><br/>

            ◉ Professional Coaching: <br />
            Our programs are curated by experienced coaches who are dedicated to helping you achieve your fitness goals.<br/><br/>

            ◉ Shop with Confidence:<br />
            Explore our online shop for the latest sportswear and high-quality whey protein supplements. 
            Elevate your gym experience with top-notch gear and nutrition. <br /><br/>

            At EldFitness, we believe in making fitness accessible and enjoyable. Join us on your fitness journey, and let's achieve greatness together!<br/><br/>
        </div>

        <!-- Side 2: Carousel -->
        <div class="col-md-6" id="carouselContainer">
            <div id="carouselExampleInterval" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="{{asset('image/c1.jpeg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{{asset('image/c2.jpeg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{{asset('image/c3.jpeg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
