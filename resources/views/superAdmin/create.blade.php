@extends('layouts.app')

@section('page-title','create ')

@section('main-content')


<form action="{{route('superAdmin.store')}}" method="POST">
    @csrf

    <div>
        <label for="model">model</label>
        <input type="text" name="name" id="model">
    </div>

    <div>
        <label for="brand">brand</label>
        <input type="text" name="brand" id="brand">
    </div>
    <div>
        <label for="engine">engine</label>
        <input type="text" name="engine" id="engine">
    </div>
    <div>
        <label for="top-speed">top speed</label>
        <input type="number" name="top_speed" id="top-speed">
    </div>
    <div>
        <label for="power">power</label>
        <input type="number" name="power" id="power">
    </div>
    <div>
        <label for="country">country</label>
        <input type="text" name="country" id="country">
    </div>
    <div>
        <label for="image-url">image url</label>
        <input type="text" name="image_url" id="image-url">
    </div>
    <div>
        <label for="weight">weight</label>
        <input type="number" name="weight" id="weight">
    </div>
    <div>
        <label for="description">description</label>
        <input type="text" name="description" id="description">
    </div>


    <div>
        <button type="submit">send</button>
        <button type="reset">reset fields</button>
    </div>

</form>

@endsection