@extends('layouts.app')

@section('main-content')


@if($errors->any())
<div>

    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach

    </ul>

</div>
@endif

<form action="@yield('route-name','')" method="POST">
    @csrf


    @yield('form-method','')
    <div>
        <label for="make">make</label>
        <input type="text" name="make" id="make" value="{{old('make',$car->make)}}">
    </div>

    <div>
        <label for="model">model</label>
        <input type="text" name="model" id="model" value="{{old('model',$car->model)}}">
    </div>

    <!-- TODO transform in to input type date -->
    <div>
        <label for="year">year</label>
        <input type="text" id="year" name="year" value="{{old('year',$car->year)}}">
    </div>
    <div>
        <label for="engine-fuel">fuel type</label>
        <input type="text" name="engine_fuel_type" id="engine-fuel"
            value="{{old('engine_fuel_type',$car->engine_fuel_type)}}">
    </div>
    <div>
        <label for="engine-hp">engine HP</label>
        <input type="number" name="engine_hp" id="engine-hp" value="{{old('engine_hp',$car->engine_hp)}}">
    </div>
    <div>
        <label for="engine-cylinders">engine cylinders</label>
        <input type="number" name="engine_cylinders" id="engine-cylinders"
            value="{{old('engine_cylinders',$car->engine_cylinders)}}">
    </div>
    <div>
        <label for="driven-wheels">driven wheels</label>
        <input type="text" name="driven_wheels" id="driven-wheels" value="{{old('driven_wheels',$car->driven_wheels)}}">
    </div>
    <div>
        <label for="transmission-type">transmission type</label>
        <input type="text" name="transmission_type" id="transmission-type"
            value="{{old('transmission_type',$car->transmission_type)}}">
    </div>
    <div>
        <label for="image-url">image url</label>
        <input type="text" name="image_url" id="image-url" value="{{old('image_url',$car->image_url)}}">
    </div>

    <!-- todo fix size of text area-->
    <div>
        <label for="description">description</label>
        <input type="text" name="description" id="description" value="{{old('description',$car->description)}}">
    </div>

    @yield('form-inputs','')
    <div>
        <button type=" submit">@yield('btn-submit-text')</button>
        <button type="reset">@yield('btn-reset-text')</button>
    </div>

</form>
@endsection