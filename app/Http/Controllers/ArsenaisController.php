<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsenal;
use App\Models\User;

class ArsenaisController extends Controller
{
    public function index()
    {
        $arsenais = Arsenal::all();
        return view('arsenais.all', ['arsenais' => $arsenais]);
    }

    public function create()
    {
        return view('arsenais.create');
    }

    public function update()
    {
        return redirect('/')->with('msg', 'Arsenal atualizado com sucesso!');
    }

    public function destroy($id){
        Arsenal::findOrfail($id)->delete();
        return redirect('/')->with('msg', 'Arsenal deletado com sucesso!');
    }

    public function store(Request $request)
    {
        $arsenal = new Arsenal();

        $arsenal->nome = $request->nome;
        $arsenal->arma_principal = $request->arma_principal;
        $arsenal->arma_secundaria = $request->arma_secundaria;
        $arsenal->armadura = $request->armadura;
        $arsenal->escudo = $request->escudo;
        $arsenal->joia = $request->joia;

        $user = auth()->user();
        $arsenal->user_id = $user->id;

        $arsenal->save();

        return redirect('/')->with('msg', 'Arsenal criado com sucesso!');
    }


    public function show($id)
    {
        $arsenal = Arsenal::findOrfail($id);

        $arsenalOwner = User::where('id', $arsenal->user_id)->first()->toArray();

        if(isset($arsenal)){
        return view('arsenais.show', ['arsenal' => $arsenal, 'arsenalOwner' => $arsenalOwner]);
        } else {
            return redirect('/')->with('msg', 'Arsenal não encontrado!');
        }     
    }

    public function dashboard()
    {
        $user = auth()->user();

        $arsenais = $user->arsenais;

        return view('arsenais.dashboard', ['arsenais' => $arsenais]);
    }


}
