@extends ('layouts.main')

@section('title', 'show')

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
    <div class="col-md-8">
        <h1>{{$item->nome}}</h1>
        <p class="lead">Tipo {{$item->tipo}}</p>
        <p class="lead">Estado {{$item->estado}}</p>	
        <p class="lead">Criado por: {{$itemOwner['name']}}</p>
        </p> 
    </div>
</div>
@endsection



