@extends('layouts.app')

@section('page-title','cars')

@section('main-content')

<div>here goes the main content</div>

{{ url()->full()}}
<div class="container">

    <td> <a class="btn btn-primary" href="{{route('superAdmin.create')}}">Create</a> </td>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Year</th>
                <th>Fuel Type</th>
                <th>Engine power</th>
                <th>Engine Cylinders</th>
                <th>Transmission type</th>
                <th>Driven wheels</th>
                <th>Image Url</th>
                <th>Description</th>
                <th colspan="3">Btn's</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cars as $car)
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->make}}</td>
                <td>{{$car->model}}</td>
                <td>{{$car->year}}</td>
                <td>{{$car->engine_fuel_type}}</td>
                <td>{{$car->engine_hp.' HP'}}</td>
                <td>{{$car->engine_cylinders}}</td>
                <td>{{$car->transmission_type}}</td>
                <td>{{Str::words($car->driven_wheels,2,' ...')}}</td>
                <td> {{$car->image_url}} </td>
                <td>{{Str::words($car->description,3,' ...')}}</td>
                <td> <a class="btn btn-primary" href="{{route('superAdmin.show',$car->id)}}">Show</a> </td>
                <td> <a class="btn btn-warning" href="{{route('superAdmin.edit',$car->id)}}">Edit</a> </td>
                <td>
                    <form action="{{route('superAdmin.delete', $car->id)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <div><button type="submit">delete</button></div>
                    </form>
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="12">no cars available</td>
            </tr>
            @endforelse
        <tbody>
    </table>
</div>
@endsection