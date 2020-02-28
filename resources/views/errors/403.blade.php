@extends('errors::illustrated-layout')

@section('code', '403')
@section('title', __('Error 403'))

@section('image')
<div style="background-image: url('/svg/404.svg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Acceso no autorizado'))