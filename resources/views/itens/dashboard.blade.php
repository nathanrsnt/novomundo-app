@extends ('layouts.main')

@section ('title', 'Dashboard')

@section ('content')

<div class="container">
<div class="row">
        <div class="col-12">
            <h1 class="text-center">Meus Itens</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/itens/create" class="btn btn-primary">Criar Item</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($itens as $item)
                    <tr>
                        <td>{{$item->nome}}</td>
                        <td>{{$item->tipo}}</td>
                        <td>{{$item->estado}}</td>
                        <td>
                            <a href="/itens/{{$item->id}}" class="btn btn-success">Ver</a>
                            <a href="/itens/{{$item->id}}/edit" class="btn btn-warning">Editar</a>
                            <form action="/itens/{{$item->id}}" method="POST" style="display: inline-block">
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
