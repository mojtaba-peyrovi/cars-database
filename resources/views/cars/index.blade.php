@extends('master')
@section('title')
    Cars 2018
@endsection
@section('content')
    @include('partials.nav')

    <main role="main" class="container">
        <div class="slider">

        </div>
        <div class="row">
            @foreach ($cars as $car)
                <div class="col-md-4">
                    <div class="card my-2" style="width: 18rem;">
                      <img class="card-img-top" src="{{ $car->imgUrl }}" alt="Card image cap">
                      <div class="card-body">
                          <span class="text-muted">By: {{ $car->user->name }}</span>
                        <h5 class="card-title">{{ $car->make }}, {{ $car->model }} - {{ $car->year }}</h5>
                        <p class="card-text">{{ str_limit($car->desc, $limit = 56, $end = '...') }}</p>
                        <a href="/cars/{{$car->id}}" class="btn btn-warning">More...</a>
                      </div>
                    </div>
                </div>

            @endforeach
        </div>



    </main><!-- /.container -->


@endsection
