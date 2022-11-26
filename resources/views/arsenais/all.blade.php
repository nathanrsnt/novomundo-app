@extends('Layouts.main')

@section('title', 'Arsenais')

@section('content')
<div class="col-md-12 ms-auto" id="arsenais-container">
    <h1 class="text-center mb-5 text-light">Arsenais Criados</h1>
    <div id="card-container" class="row">
    @foreach($arsenais as $arsenal)
        <div class="card col-md-3 mb-5 me-5 text-center" id ="rcorners1" >
            <div class="card-body">
                <h4 class="card-title">{{$arsenal->nome}}</h4>
                <p class="card-text d-inline" id="nv">Arma principal: {{$arsenal->arma_principal}}</p>
                <p class="card-text d-inline" id="nv">Arma secundaria {{$arsenal->arma_secundaria}}</p>
                <p class="card-text d-inline" id="nv">Armadura {{$arsenal->armadura}}</p>
                <p class="card-text d-inline" id="nv">Escudo {{$arsenal->escudo}}</p>
                <p class="card-text d-inline" id="nv">Jóia {{$arsenal->joia}}</p>

                <a href="/arsenais/{{$arsenal->id}}" class="btn btn-warning btn-lg col-md-12 mt-2">Ver mais</a>
               
                
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
