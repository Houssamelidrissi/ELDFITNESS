
@extends('Layout')
<style>
    h5 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
    }

    h5:hover {
        font-size: 30px;
        text-decoration: underline red;
    }
    .card-body>a{
        text-decoration: none;
        color: white;
    }
</style>

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white" style="text-align: center;">
                <a href="{{route('Exback')}}">
                    <img src="{{asset('/image/back/b.jpeg')}}" class="card-img-top" alt="Image 1">
                </a>
                <div class="card-body">
                    <a href="{{route('Exback')}}">
                        <h5 class="card-title">Back </h5>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->

        <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white" style="text-align: center;">
                <a href="{{route('Exbiceps')}}">
                    <img src="{{asset('/image/biceps/bc.jpeg')}}" class="card-img-top" alt="Image 1">
                </a>
                <div class="card-body">
                    <a href="{{route('Exbiceps')}}">
                        <h5 class="card-title">Biceps </h5>
                    </a>
                </div>
            </div>
        </div>


        <!-- Card 3 -->
        <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white" style="text-align: center;">
                <a href="{{route('Exchest')}}">
                    <img src="{{asset('/image/chest/c.webp')}}" class="card-img-top" alt="Image 1">
                </a>
                <div class="card-body">
                    <a href="{{route('Exchest')}}">
                        <h5 class="card-title">Chest </h5>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white" style="text-align: center;">
                <a href="{{route('Extriceps')}}">
                    <img src="{{asset('/image/triceps/t.jpeg')}}" class="card-img-top" alt="Image 1">
                </a>
                <div class="card-body">
                    <a href="{{route('Extriceps')}}">
                        <h5 class="card-title">Triceps </h5>
                    </a>
                </div>
            </div>
        </div>



        <!-- Card 5 -->
        <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white" style="text-align: center;">
                <a href="{{route('Exshoulder')}}">
                    <img src="{{asset('/image/shoulders/sh.jpeg')}}" class="card-img-top" alt="Image 1">
                </a>
                <div class="card-body">
                    <a href="{{route('Exshoulder')}}">
                        <h5 class="card-title">Shoulders </h5>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white" style="text-align: center;">
                <a href="{{route('Exlegs')}}">
                    <img src="{{asset('/image/legs/l.jpeg')}}" class="card-img-top" alt="Image 1">
                </a>
                <div class="card-body">
                    <a href="{{route('Exlegs')}}">
                        <h5 class="card-title">Legs </h5>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 7 -->

        <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white" style="text-align: center;">
                <a href="{{route('Exabs')}}">
                    <img src="{{asset('/image/abs/ab.jpeg')}}" class="card-img-top" alt="Image 1">
                </a>
                <div class="card-body">
                    <a href="{{route('Exabs')}}">
                        <h5 class="card-title">ABS </h5>
                    </a>
                </div>
            </div>
        </div>
        
        
        <!-- Card 8 -->
        <div class="col-md-3 mb-3">
            <div class="card bg-dark text-white" style="text-align: center;">
                <a href="{{route('Excardio')}}">
                    <img src="{{asset('/image/cardio/cd.jpeg')}}" class="card-img-top" alt="Image 1">
                </a>
                <div class="card-body">
                    <a href="{{route('Excardio')}}">
                        <h5 class="card-title">Cardio </h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection