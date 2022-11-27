@extends ('layouts.main')

@section ('title', 'Personagem')

@section ('content')

<div class="container">
    <div class="text-center">
        <div class="col-md-12">
            <h1 class="text-center">Perfil do Personagem</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4">
            <img src="/img/charplaceholder2.jpg" alt="imgpersonagem" id="rcorners2" width="400" height="400">
        </div>

        <div class="col-md-3">
            <h2 class="text-center">Olá, {{ auth()->user()->name }}!</h2>
            <h3 class="text-center">Suas funções são: </h3>
            <div class="card-container ">
            @foreach($user->roles as $role)
                <a href="#" class="btn btn-primary mb-2 rounded-pill">
                    <em class="fa-solid fa-tag "> {{ $role->name }} </em>
                </a>
            @endforeach
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle rounded-pill" type="button" data-toggle="dropdown">
                    <em class="fa-solid fa-tag "> </em>
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Dps</a></li>
                    <li><a href="#">Healer</a></li>
                    <li><a href="#">Tank</a></li>
                </ul>
            </div>
            </div>
        </div> 
    </div>
</div>
@endsection