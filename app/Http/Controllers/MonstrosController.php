<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monstro;
use App\Models\User;

class MonstrosController extends Controller
{
    public function index()
    {
        $monstros = Monstro::all();
        return view('monstros.all', ['monstros' => $monstros]);
    }

    public function create()
    {
        return view('monstros.create');
    }

    public function destroy($id){
        Monstro::findOrfail($id)->delete();
        return redirect('/')->with('msg', 'Monstro deletado com sucesso!');
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

        $user = auth()->user();
        $monstro->user_id = $user->id;

        $monstro->save();

        return redirect('/')->with('msg', 'Monstro criado com sucesso!');
    }

    public function show($id){

        $monstro = Monstro::findOrfail($id);

        $monstroOwner = User::where('id', $monstro->user_id)->first()->toArray();

        if(isset($monstro)){
            return view('monstros.show', ['monstro' => $monstro, 'monstroOwner' => $monstroOwner]);
        } else {
            return redirect('/')->with('msg', 'Monstro não encontrado!');
        }

    }

    public function dashboard(){
        $user = auth()->user();
        
        $monstros = $user->monstros;

        return view('monstros.dashboard', ['monstros' => $monstros]);
    }
}
