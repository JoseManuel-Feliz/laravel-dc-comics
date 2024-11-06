@extends('layouts.create-edit')

@section('page-title','edit')

@section('route-name')
{{route('superAdmin.update',$car->id)}}
@endsection



@section('form-method')

{{method_field('PUT')}}


@endsection


@section('btn-submit-text', 'send')

@section('btn-reset-text', 'reset')