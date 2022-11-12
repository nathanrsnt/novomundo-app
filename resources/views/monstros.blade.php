@extends('Layouts.main')

@section('title', 'Monstros')

@section('content')
<h1>Monstros</h1>

@foreach($monstros as $monstro)
    <p>{{ $monstro->nome }}</p>
@endforeach

@endsection
