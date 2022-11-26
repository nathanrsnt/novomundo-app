@extends ('layouts.main')

@section('title', 'show')

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
    <div class="col-md-8">
        <h1>{{$arsenal->nome}}</h1>
        <p class="lead">Arma Primaria: {{$arsenal->arma_principal}}</p>
        <p class="lead">Arma Secundaria: {{$arsenal->arma_secundaria}}</p>
        <p class="lead">Armadura:  {{$arsenal->armadura}}</p>
        <p class="lead">Escudo: {{$arsenal->escudo}}</p>
        <p class="lead">Joia: {{$arsenal->joia}}</p>
        <p class="lead">Criado por: {{$arsenalOwner['name']}}</p>
        </p> 
    </div>
    
</div>
@endsection



