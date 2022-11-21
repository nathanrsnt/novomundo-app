@extends('layouts.main')

@section('title', 'Criar Monstro')

@section('content')

<div class="container">
    <form action="/monstros" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-container col-md-7 text-center text-light">
            <h1 class="text-center">Criar Monstro</h1>
            <div class="form-group">
                <label for="image">Imagem do Monstro: </label>
                <br>
                <input type="file" class="form-control-file" id="image" name="image" alt="image">
            </div>
            <div class="form-group mt-2">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome do Monstro">
            </div>
            <div class="form-group">
                <label for="nivel">Nível</label>
                <input type="number" class="form-control" id="nivel" name="nivel" placeholder="Digite o Nível do Monstro">
            </div>
            <div class="form-group">
                <label for="vida">Vida</label>
                <input type="number" class="form-control" id="vida" name="vida" placeholder="Digite a Vida do Monstro">
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary" value="Criar Monstro">Criar</button>
            </div>
        </div>
    </form>
</div>

@endsection