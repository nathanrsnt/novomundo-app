@extends ('layouts.main')

@section('title', 'Atualizar Arsenal')

@section ('content')
<div class="container">
    <form action="">
        <div class="form-group" method="POST">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Arsenal">
        </div>
        <div class="form-group">
            <label for="arma_principal">Arma Principal</label>
            <input type="text" class="form-control" id="arma_principal" name="arma_principal">
        </div>
        <div class="form-group">
            <label for="arma_secundaria">Arma Secundária</label>
            <input type="text" class="form-control" id="arma_secundaria" name="arma_secundaria">
        </div>
        <div class="form-group">
            <label for="armadura">Armadura</label>
            <input type="text" class="form-control" id="armadura" name="armadura">
        </div>
        <div class="form-group mt-3">
            <label for="escudo">Escudo</label>
            <input type="text" class="form-control" id="escudo" name="escudo">
        </div>
        <div class="form-group mt-3">
            <label for="joia">Joia</label>
            <input type="text" class="form-control" id="joia" name="joia">
        </div>
        <div class="form-group mt-4 text-center">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
</div>
@endsection