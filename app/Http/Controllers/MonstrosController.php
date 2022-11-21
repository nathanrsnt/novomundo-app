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
        
        if ($request->hasfile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/monstros'), $imageName);

            $monstro->image = $imageName;
        }

        $monstro->save();

        return redirect('/')->with('msg', 'Monstro criado com sucesso!');
    }
}
