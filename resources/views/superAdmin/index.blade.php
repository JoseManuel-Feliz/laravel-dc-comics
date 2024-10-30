@extends('layouts.app')

@section('page-title','cars')

@section('main-content')

<div>here goes the main content</div>


<div class="container">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Model</th>
                <th>Brand</th>
                <th>Engine</th>
                <th>Top speed</th>
                <th>Power</th>
                <th>Country</th>
                <th>Image Url</th>
                <th>Weight</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cars as $car)
            <tr>
                <td>{{$car->id}}</td>
                <td class="brand-model">{{$car->name}}</td>
                <td>{{$car->brand}}</td>
                <td>{{$car->engine}}</td>
                <td>{{$car->top_speed.' km/h'}}</td>
                <td>{{$car->power.' HP'}}</td>
                <td>{{$car->country}}</td>
                <td> {{Str::words($car->image_url,3,' ...')}} </td>
                <td>{{$car->weight.' kg'}}</td>
                <td>{{Str::words($car->description,4,' ...')}}</td>
                <td> <a class="btn btn-primary" href="{{route('superAdmin.show',$car->id)}}">Show</a> </td>
                <td> <a class="btn btn-warning" href="#">Edit</a> </td>
                <td> <a class="btn btn-danger" href="#">Delete</a> </td>
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