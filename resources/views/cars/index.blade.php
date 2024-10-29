@extends('layouts.app')

@section('page-title','cars')

@section('main-content')

<div>here goes the main content</div>



<!-- "name" => "Lamborghini Sian FKP 37"
"brand" => "Lamborghini"
"engine" => "6.5L V12 Hybrid"
"top_speed" => 350
        "power" => 819
        "country" => "Italy"
        "image_url" => "https://cdn.motor1.com/images/mgl/MZp7Y/s1/lamborghini-sian-fkp-37.jpg"
        "weight" => "1620.00"
        "description" => "La prima supercar ibrida di Lamborghini, dotata di tecnologie innovative per prestazioni incredibili." -->
@forelse($cars as $car)
<ul>
    <li>{{$car->name}}</li>
    <li>{{$car->brand}}</li>
    <li>{{$car->engine}}</li>
    <li>{{$car->top_speed.' km/h'}}</li>
    <li>{{$car->power.' HP'}}</li>
    <li>{{$car->country}}</li>
    <li><img src="{{$car->image_url}}" alt="{{$car->name.' photo'}}"></li>
    <li>{{$car->weight.' kg'}}</li>
    <li>{{$car->description}}</li>

</ul>
@empty
<ul>
    <li>no cars available</li>
</ul>
@endforelse

@endsection