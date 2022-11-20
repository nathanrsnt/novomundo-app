@extends('Layouts.main')

@section('title', 'Monstros')

@section('content')
<div class="col-md-12 ms-auto" id="monstros-container">
    <h1 class="text-center mb-5 text-light">Monstros Cadastrados</h1>
    <div id="card-container" class="row">
    @foreach($monstros as $monstro)
        <div class="card col-md-3 mb-5 me-5 text-center" id ="rcorners1" >
            <div class="card-body">
                <h4 class="card-title">{{$monstro->nome}}</h4>
                <img src="/img/monstroteste.webp" id="rcorners2" alt="imgmonstro" width="270" height="150">
                <p class="card-text d-inline" id="nv">Nível {{$monstro->nivel}}</p>
                <p class="card-text d-inline" id="vd">Vida: {{$monstro->vida}}</p>
                <br>
                <a href="#" class="btn btn-warning btn-lg col-md-12 mt-2">Ver mais</a>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
