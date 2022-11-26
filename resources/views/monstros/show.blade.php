@extends ('layouts.main')

@section('title', 'show')

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
    <div class="image-container">
        <img src="/img/monstros/{{$monstro->image}}" alt="imgmonstro" width="300" height="300">
    </div>
    <div class="col-md-8">
        <h1>{{$monstro->nome}}</h1>
        <p class="lead">Nível {{$monstro->nivel}}</p>
        <p class="lead">Vida {{$monstro->vida}}</p>	
        <p class="lead">Criado por: {{$monstroOwner['name']}}</p>
        </p> 
    </div>
    
</div>
@endsection



