@extends ('layouts.main')

@section ('title', 'Dashboard')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Meus Arsenais</h1>
        </div>
    </div>
    <div class="input-group mb-5">
        <form action="/arsenais/dashboard" method="GET" class="d-flex">
            <input class="form-control me-2" id="search" name="search" type="text" placeholder="Pesquisar Arsenal &#x1F50E;&#xFE0E;">
        </form>
    </div>
    @if($search == 'search')
    <div class="mb-4">
        <h2>Resultados para <strong>{{$search}}</strong>:</h2>
    </div>
    @endif
    <div class="row mt-3">
        <div class="col-md-12">
            @if(count($arsenais) > 0)
            <table class="table text-light">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Arma Principal</th>
                        <th scope="col">Arma Secundária</th>
                        <th scope="col">Armadura</th>
                        <th scope="col">Escudo</th>
                        <th scope="col">Joia</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
            @endif
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
                            <a href="/arsenais/create" class="btn btn-primary">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                            <a href="/arsenais/{{$arsenal->id}}" class="btn btn-primary">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="/arsenais/{{$arsenal->id}}/edit" class="btn btn-primary">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="/arsenais/{{$arsenal->id}}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>  
                        </td>
                    </tr>
                    @endforeach
                    <table class="table">
                    <thead>
                        <tr>
                            <td colspan="4" class="text-center">
                                <a href="/arsenais/create" class="btn btn-primary">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </thead>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
