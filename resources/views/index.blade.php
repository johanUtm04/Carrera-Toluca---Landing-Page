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
    @include('race.partials._route')
    @include('race.partials._registration-centers')
    @include('race.partials._out-of-town-support')
    @include('race.partials._organizer-contact')

    
@stop

@section('js')
    <script src="{{ asset('js/race/index.js') }}"></script>
@stop