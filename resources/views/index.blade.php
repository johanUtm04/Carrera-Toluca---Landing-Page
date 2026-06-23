@extends('layouts.app')

@section('title', 'Carrera | Corporación Azul')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/race/index.css') }}">
@stop

@section('content')
    @include('race.partials._results-button', [
    'href' => '#resultados',
    'text' => 'Ver Resultados',
                                ])
    @include('race.partials._hero')
    @include('race.partials._cause')
    @include('race.partials._official-call')
    @include('race.partials._awards')
    @include('race.partials._runner-kit')
    @include('race.partials._raffle')
    
    @include('race.partials._services')
    @include('race.partials._video')
    @include('race.partials._kit-details')
@stop

@section('js')
    <script src="{{ asset('js/race/index.js') }}"></script>
@stop