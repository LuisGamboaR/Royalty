@extends('errors::illustrated-layout')

@section('code', '419 ')
@section('title', __('Error 419'))

@section('image')
<div style="background-image: url('/svg/404.svg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Lo siento, tu sesión a expirado, por favor recarga e intentalo de nuevo'))