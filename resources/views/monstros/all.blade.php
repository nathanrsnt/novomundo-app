@extends('Layouts.main')

@section('title', 'Monstros')

@section('content')
<div class="col-md-12 ms-auto" id="monstros-container">
    <h1 class="text-center mb-5 text-light">Monstros Cadastrados</h1>
    <div id="card-container" class="row">
    <div class="input-group mb-5">
        <form action="/monstros/all" method="GET" class="d-flex">
            @csrf
            <input class="form-control me-2" id="search" name="search" type="text" placeholder="Pesquisar Monstro">
            <button class="btn btn-primary" type="submit">
                <em class="fa-solid fa-search"></em>
            </button>
        </form>
    </div>
    @if($search)
    <div class="mb-4">
        <h2>Resultados para <strong>{{$search}}</strong>:</h2>
    </div>
    @endif
    @foreach($monstros as $monstro)
        <div class="card col-md-3 mb-5 me-5 text-center text-muted" id ="rcorners1" >
            <div class="card-body">
                <h4 class="card-title">{{$monstro->nome}}</h4>
                <img src="/img/monstros/{{ $monstro->image }}" id="rcorners2" alt="imgmonstro" width="270" height="150">
                <p class="card-text d-inline" id="nv">Nível {{$monstro->nivel}}</p>
                <p class="card-text d-inline" id="vd">Vida: {{$monstro->vida}}</p>
                <p class="card-text d-inline" id="vd">Eliminados: {{$monstro->eliminados}}</p>
                <br>
                <a href="/monstros/{{$monstro->id}}" class="btn btn-warning btn-lg col-md-12 mt-2">Ver mais</a>
            </div>
        </div>
    @endforeach
    @if(count($monstros) == 0 && $search)
        <p>Não foi encontrado nenhum monstro com esses parâmetros! <br><a href="/monstros/all" class="btn btn-warning col-md-3 mt-2">Ver todos</a></p>
    @elseif(count($monstros) == 0)
        <p>Não há monstros cadastrados!</p>
    @endif
    </div>
</div>
@endsection
