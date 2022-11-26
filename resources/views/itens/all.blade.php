@extends('Layouts.main')

@section('title', 'Itens')

@section('content')
<div class="col-md-12 ms-auto" id="itens-container">
    <h1 class="text-center mb-5 text-light">Itens Cadastrados</h1>
    <div id="card-container" class="row">
    @foreach($itens as $item)
        <div class="card col-md-3 mb-5 me-5 text-center" id ="rcorners1" >
            <div class="card-body">
                <h4 class="card-title">{{$item->nome}}</h4>
                <p class="card-text d-inline" id="nv">Tipo {{$item->tipo}}</p>
                <p class="card-text d-inline" id="vd">Estado: {{$item->estado}}</p>
                <br>
                <a href="/itens/{{$item->id}}" class="btn btn-warning btn-lg col-md-12 mt-2">Ver mais</a>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
