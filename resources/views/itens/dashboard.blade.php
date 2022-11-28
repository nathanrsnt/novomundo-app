@extends ('layouts.main')

@section ('title', 'Dashboard')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Meus Itens</h1>
        </div>
    </div>
    <div class="input-group mb-5">
        <form action="/itens/dashboard" method="GET" class="d-flex">
            @csrf
            <input class="form-control me-2" id="search" name="search" type="text" placeholder="Pesquisar Item &#x1F50E;&#xFE0E;">
        </form>
    </div>
    @if($search == 'search')
    <div class="mb-4">
        <h2>Resultados para <strong>{{$search}}</strong>:</h2>
    </div>
    @endif
    <div class="row mt-3">
        <div class="col-md-12">
            @if(count($itens) > 0)
            <table class="table text-light">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
            @endif
                <tbody>
                    @foreach ($itens as $item)
                    <tr>
                        <td>{{$item->nome}}</td>
                        <td>{{$item->tipo}}</td>
                        <td>{{$item->estado}}</td>
                        <td>
                            <a href="/itens/{{$item->id}}" class="btn btn-primary">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="/itens/{{$item->id}}/edit" class="btn btn-primary">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="/itens/{{$item->id}}" method="POST" style="display: inline-block">
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
                                <a href="/itens/create" class="btn btn-primary">
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
