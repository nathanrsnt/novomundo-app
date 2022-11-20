<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monstro;

class MonstrosController extends Controller
{
    public function index()
    {
        $monstros = Monstro::all();
        return view('monstros.read', ['monstros' => $monstros]);
    }

    public function create()
    {
        return view('monstros.create');
    }

    public function store(Request $request)
    {
        $monstro = new Monstro();

        $monstro->nome = $request->nome;
        $monstro->nivel = $request->nivel;
        $monstro->vida = $request->vida;
        $monstro->save();

        return redirect('/mostros/read')->with('msg', 'Monstro criado com sucesso!');
    }
}
