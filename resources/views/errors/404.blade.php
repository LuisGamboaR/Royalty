@extends('errors::illustrated-layout')

@section('code', '404')
@section('title', __('Error 404'))

@section('image')
<div style="background-image: url('/svg/404.svg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Lo siento, la página que estabas buscando no se ha encontrado.'))