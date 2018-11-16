@extends('errors::illustrated-layout')

@section('code', '400')
@section('title', __('Bad Request'))

@section('image')
    <div style="background-image: url('/svg/400.svg');"
         class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('message', __('The request cannot be fulfilled due to bad data. Please verify your data and try again'))
