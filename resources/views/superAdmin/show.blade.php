@extends('layouts.app')

@section('page-title','car')

@section('main-content')

<div>here goes the main content</div>


<div class="container">
    <div class="row">

        <div class="col-show">


            <div class="img-wrapper">
                <img src="{{$car->image_url}}" alt="{{$car->model.' photo'}}">
            </div>
            <p>{{$car->make}}</p>
            <p>{{$car->model}}</p>
            <p>{{$car->year}}</p>
            <p>{{$car->engine_fuel_type}}</p>
            <p>{{$car->engine_hp.' HP'}}</p>
            <p>{{$car->engine_cylinders}}</p>
            <p>{{$car->transmission_type}}</p>
            <p>{{$car->driven_wheels}}</p>
            <p>{{$car->description}}</p>
            <p>{{$car->image_url}}</p>

        </div>

    </div>
</div>
@endsection