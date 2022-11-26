@extends ('layouts.main')

@section ('title', 'Dashboard')

@section ('content')
<div class="container text-light">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Meus Monstros</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/monstros/create" class="btn btn-primary">Criar Monstro</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped text-light">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Nível</th>
                        <th>Vida</th>
                        <th>Eliminados</th>
                    </tr>
                </thead>
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
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </form>
                            <form action="/monstros/{{$monstro->id}}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                            <a href="/monstros/{{$monstro->id}}" class="btn btn-primary">Ver</a>
                            <a href="/monstros/{{$monstro->id}}/edit" class="btn btn-primary">Editar</a> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection