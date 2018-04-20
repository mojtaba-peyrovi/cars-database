@extends('master')
@section('title')
    Cars 2018
@endsection
@section('content')
    @include('partials.nav')

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8">
                <span class="" style="font-size:24px; font-weight:700;">{{ $car->make }}, {{ $car->model }}</span>
                <span style="font-size: 20px; font-weight:500; color:grey;">({{ $car->year }})</span>
                <img src="{{ $car->imgUrl }}" alt="" class="my-2">
            </div>
            <div class="col-md-4">
                <h2 class="demoHeaders">About This Car</h2>
                <div id="accordion">
                	<h3>General Info</h3>
                        <ul>
                            <li>
                                <strong>Car Make:</strong>
                                {{ $car->make }}
                            </li>
                            <li>
                                <strong>Car Model:</strong>
                                {{ $car->model }}
                            </li>
                            <li>
                                <strong>Car Trim:</strong>
                                {{ $car->trim }}
                            </li>
                            <li>
                                <strong>Car Year:</strong>
                                {{ $car->year }}
                            </li>
                            <li>
                                <strong>Car Body:</strong>
                                {{ $car->bodyType }}
                            </li>
                            <li>
                                <strong>Gear:</strong>
                                {{ $car->gear }}
                            </li>
                            <li>
                                <strong>Car Engine:</strong>
                                {{ $car->engine }}
                            </li>
                            <li>
                                <strong>Car Fuel:</strong>
                                {{ $car->fuel }}
                            </li>
                            <li>
                                <strong>Car Mileage:</strong>
                                {{ $car->mileage }}
                            </li>
                            <li>
                                <strong>Car Body:</strong>
                                {{ $car->bodyType }}
                            </li>
                        </ul>
                	<h3>Features</h3>
                        <ul>
                            <li>
                                <strong>Color:</strong>
                                <svg width="100" height="30">
                                  <rect width="100" height="30" style="fill:{{ $car->color }};stroke-width:3;" />
                                </svg>
                            </li>
                            <li>
                                <strong>Drive Type:</strong>
                                {{ $car->driveType }}
                            </li>
                            <li>
                                <strong>Doors:</strong>
                                {{ $car->doors }}
                            </li>
                        </ul>
                	<h3>Description</h3>
                	   <div>{{ $car->desc }}</div>
                    <h3>Location</h3>
                	<div>
                        {{ $car->location }}
                    </div>
                </div>
            </div>
        </div>




    </main><!-- /.container -->


@endsection
