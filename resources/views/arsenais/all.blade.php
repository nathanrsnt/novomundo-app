@extends('Layouts.main')

@section('title', 'Arsenais')

@section('content')
<div class="col-md-12 ms-auto" id="arsenais-container">
    <h1 class="text-center mb-5 text-light">Arsenais Criados</h1>
    <div id="card-container" class="row">
    <div class="input-group mb-5">
        <form action="/arsenais/all" method="GET" class="d-flex">
            @csrf
            <input class="form-control me-2" id="search" name="search" type="text" placeholder="Pesquisar Arsenal">
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
    @foreach($arsenais as $arsenal)
        <div class="card col-md-3 mb-5 me-5 text-center text-muted" id ="rcorners1" >
            <div class="card-body">
                <h4 class="card-title">{{$arsenal->nome}}</h4>
                <img src="/img/arsenais/{{ $arsenal->image }}" id="rcorners2" alt="imgarsenais" width="270" height="150">
                <p class="card-text d-inline mt-1" id="nv">Arma principal: {{$arsenal->arma_principal}}</p>
                <br>
                <p class="card-text d-inline" id="nv">Arma secundaria: {{$arsenal->arma_secundaria}}</p>
                <br>
                <p class="card-text d-inline" id="nv">Armadura: {{$arsenal->armadura}}</p>
                <br>
                <p class="card-text d-inline" id="nv">Escudo: {{$arsenal->escudo}}</p>
                <br>
                <p class="card-text d-inline" id="nv">Jóia: {{$arsenal->joia}}</p>
                <a href="/arsenais/{{$arsenal->id}}" class="btn btn-warning btn-lg col-md-12 mt-2">Ver mais</a>       
            </div>
        </div>
    @endforeach
    @if(count($arsenais) == 0 && $search)
        <p>Não foi encontrado nenhum arsenal com esses parâmetros! <br><a href="/arsenais/all" class="btn btn-warning col-md-3 mt-2">Ver todos</a></p>
    @elseif(count($arsenais) == 0)
        <p>Não há arsenais cadastrados!</p>
    @endif
    </div>
</div>
@endsection
