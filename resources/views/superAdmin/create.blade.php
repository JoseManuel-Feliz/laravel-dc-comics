@extends('layouts.create-edit')

@section('page-title','create')

@section('route-name')
{{route('superAdmin.store')}}
@endsection



@section('form-method')
{{method_field('POST')}}

@endsection


@section('btn-submit-text', 'send')

@section('btn-reset-text', 'reset')