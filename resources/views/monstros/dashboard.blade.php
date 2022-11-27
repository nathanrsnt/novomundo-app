@extends ('layouts.main')

@section ('title', 'Dashboard')

@section ('content')
<div class="container text-light">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Meus Monstros</h1>
        </div>
    </div>
    <div class="input-group mb-5">
        <form action="/monstros/dashboard" method="GET" class="d-flex">
            <input class="form-control me-2" id="search" name="search" type="text" placeholder="Pesquisar Monstro &#x1F50E;&#xFE0E;">
        </form>
    </div>
    @if($search == 'search')
    <div class="mb-4">
        <h2>Resultados para <strong>{{$search}}</strong>:</h2>
    </div>
    @endif
    <div class="row mt-3">
        <div class="col-12">
            @if(count($monstros) > 0)
            <table class="table text-light">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Nível</th>
                        <th>Vida</th>
                        <th>Eliminados</th>
                    </tr>
                </thead>
            @endif
                <tbody>
                    @foreach ($monstros as $monstro)
                    <tr>
                        <td>{{$monstro->nome}}</td>
                        <td>{{$monstro->nivel}}</td>
                        <td>{{$monstro->vida}}</td>
                        <td>{{$monstro->eliminados}}</td>
                        <td>
                            <form action="/monstros/addElimina/{{$monstro->id}}" method="POST" style="display: inline-block">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa-solid fa-skull-crossbones"></i>
                                </button>
                            </form>
                            <a href="/monstros/{{$monstro->id}}" class="btn btn-primary">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="/monstros/{{$monstro->id}}/edit" class="btn btn-primary">
                                <i class="fa-solid fa-pen"></i>
                            </a> 
                            <form action="/monstros/{{$monstro->id}}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <td colspan="4" class="text-center">
                                <a href="/monstros/create" class="btn btn-primary">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </thead>
                </table>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection