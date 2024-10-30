@extends('layouts.app')

@section('page-title','cars')

@section('main-content')

<div>here goes the main content</div>


<div class="container">
    <div class="row">

        @forelse($cars as $car)
        <div class="col">

            <a class="card" href="{{route('car.show',$car->id)}}">
                <div class="img-wrapper">
                    <img src="{{$car->image_url}}" alt="{{$car->name.' photo'}}">
                </div>
                <h5 class="brand-model">{{$car->name}}</h5>
                <p>{{$car->brand}}</p>
                <p>{{$car->engine}}</p>
                <p>{{$car->top_speed.' km/h'}}</p>
                <p>{{$car->power.' HP'}}</p>
                <p>{{$car->country}}</p>
                <p>{{$car->weight.' kg'}}</p>
                <p>{{Str::words($car->description,4,' ...')}}</p>
            </a>

        </div>
        @empty
        <div class="col">
            <p>no cars available</p>
        </div>
        @endforelse

    </div>
</div>
@endsection