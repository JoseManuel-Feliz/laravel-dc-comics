@extends('layouts.app')

@section('page-title','create ')

@section('main-content')



<form action="{{route('superAdmin.store')}}" method="POST">
    {{method_field('PUT')}}

    @csrf

    <div>
        <label for="model">model</label>
        <input type="text" name="name" id="model" value="{{$car->name}}">
    </div>

    <div>
        <label for="brand">brand</label>
        <input type="text" name="brand" id="brand" value="{{$car->brand}}">
    </div>
    <div>
        <label for="engine">engine</label>
        <input type="text" name="engine" id="engine" value="{{$car->engine}}">
    </div>
    <div>
        <label for="top-speed">top speed</label>
        <input type="number" name="top_speed" id="top-speed" value="{{$car->top_speed}}">
    </div>
    <div>
        <label for="power">power</label>
        <input type="number" name="power" id="power" value="{{$car->power}}">
    </div>
    <div>
        <label for="country">country</label>
        <input type="text" name="country" id="country" value="{{$car->country}}">
    </div>
    <div>
        <label for="image-url">image url</label>
        <input type="text" name="image_url" id="image-url" value="{{$car->image_url}}">
    </div>
    <div>
        <label for="weight">weight</label>
        <input type="number" name="weight" id="weight" value="{{$car->weight}}">
    </div>
    <div>
        <label for="description">description</label>
        <input type="text" name="description" id="description" value="{{$car->description}}">
    </div>


    <div>
        <button type="submit">send</button>
        <button type="reset">reset fields</button>
    </div>

</form>

@endsection