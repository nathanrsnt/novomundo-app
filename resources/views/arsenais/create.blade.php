@extends ('layouts.main')

@section('title', 'Criar Arsenal')

@section ('content')

<div class="container text-light">
    <form action="/arsenais" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Arsenal: </label>
            <br>
            <input type="file" class="form-control-file" id="image" name="image" alt="image">
        </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Arsenal">
        </div>
        <div class="form-group">
            <label for="arma_principal">Arma Principal</label>
            <input type="text" class="form-control" id="arma_principal" name="arma_principal" placeholder="Insira a Arma Principal">
        </div>
        <div class="form-group">
            <label for="arma_secundaria">Arma Secundária</label>
            <input type="text" class="form-control" id="arma_secundaria" name="arma_secundaria" placeholder="Insira a Arma Secundaria">
        </div>
        <div class="form-group">
            <label for="armadura">Armadura</label>
            <input type="text" class="form-control" id="armadura" name="armadura" placeholder="Insira o Nome ou tipo da Armadura">
        </div>
        <div class="form-group">
            <label for="escudo">Escudo</label>
            <input type="text" class="form-control" id="escudo" name="escudo" placeholder="Insira o Nome ou Tipo do Escudo">
        </div>
        <div class="form-group">
            <label for="joia">Joia</label>
            <input type="text" class="form-control" id="joia" name="joia" placeholder="Insira o Nome ou Tipo da Joia">
        </div>
        <div class="form-group mt-4 text-center">
            <button type="submit" class="btn btn-primary" value="Criar Arsenal">Criar</button>
        </div>
    </form>
</div>

@endsection

