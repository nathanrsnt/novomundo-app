@extends ('layouts.main')

@section('title', 'Arsenais')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Meus Arsenais</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/arsenais/create" class="btn btn-primary">Criar Arsenal</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Arma Principal</th>
                        <th>Arma Secundária</th>
                        <th>Armadura</th>
                        <th>Escudo</th>
                        <th>Joia</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arsenais as $arsenal)
                    <tr>
                        <td>{{$arsenal->nome}}</td>
                        <td>{{$arsenal->arma_principal}}</td>
                        <td>{{$arsenal->arma_secundaria}}</td>
                        <td>{{$arsenal->armadura}}</td>
                        <td>{{$arsenal->escudo}}</td>
                        <td>{{$arsenal->joia}}</td>
                        <td>
                            <a href="/arsenais/{{$arsenal->id}}" class="btn btn-success">Ver</a>
                            <a href="/arsenais/{{$arsenal->id}}/edit" class="btn btn-warning">Editar</a>
                            <form action="/arsenais/{{$arsenal->id}}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
