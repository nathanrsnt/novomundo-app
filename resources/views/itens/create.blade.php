@extends('layouts.main')

@section('title', 'Criar Item')

@section('content')

<div class="container">
    <form action="/itens" method="POST">
        @csrf
        <div class="form-container text-center text-light">
            <h1 class="text-center">Criar Item</h1>
            <div class="form-group mt-2">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome do Monstro">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Digite o Tipo do Item">
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estadi" name="estado" placeholder="Digite o estado do item">
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary" value="Criar Monstro">Criar</button>
            </div>
        </div>
    </form>
</div>

@endsection