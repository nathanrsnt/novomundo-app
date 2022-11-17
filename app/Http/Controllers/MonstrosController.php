<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monstro;

class MonstrosController extends Controller
{
    public function index()
    {
        $monstros = Monstro::all();
        return view('monstros', ['monstros' => $monstros]);
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

        return view('/');
    }
}
