@extends('Layouts.main')

@section('title', 'Itens')

@section('content')
<div class="col-md-12 ms-auto" id="itens-container">
    <h1 class="text-center mb-5 text-light">Itens Cadastrados</h1>
    <div id="card-container" class="row">
    <div class="input-group mb-5">
        <form action="/itens/all" method="GET" class="d-flex">
            <input class="form-control me-2" id="search" name="search" type="text" placeholder="Pesquisar Item">
            <button class="btn btn-primary" type="submit">
                <em class="fa-solid fa-search"></em>
            </button>
        </form>
    </div>
    @if($search == 'search')
    <div class="mb-4">
        <h2>Resultados para <strong>{{$search}}</strong>:</h2>
    </div>
    @endif
    @foreach($itens as $item)
        <div class="card col-md-3 mb-5 me-5 text-center" id ="rcorners1" >
            <div class="card-body text-muted">
                <h4 class="card-title">{{$item->nome}}</h4>
                <img src="/img/itens/{{ $item->image }}" id="rcorners2" alt="imgitm" width="270" height="150">
                <p class="card-text d-inline" id="nv">Tipo {{$item->tipo}}</p>
                <p class="card-text d-inline" id="vd">Estado: {{$item->estado}}</p>
                <br>
                <a href="/itens/{{$item->id}}" class="btn btn-warning btn-lg col-md-12 mt-2">Ver mais</a>
            </div>
        </div>
    @endforeach
    
    @if(count($itens) == 0 && $search)
        <p>Não foi encontrado nenhum item com esses parâmetros! <br><a href="/itens/all" class="btn btn-warning col-md-3 mt-2">Ver todos</a></p>
    @elseif(count($itens) == 0)
        <p>Não há itens cadastrados!</p>
    @endif
    </div>
</div>
@endsection
