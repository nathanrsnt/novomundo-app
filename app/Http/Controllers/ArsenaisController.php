<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsenal;
use App\Models\User;

class ArsenaisController extends Controller
{
    public function index()
    {
        $search = request('search');
        if ($search) {
            $arsenais = Arsenal::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        } else{
            $arsenais = Arsenal::all();            
        }
        return view('arsenais.all', ['arsenais' => $arsenais, 'search' => $search]);
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
        return redirect('/arsenais/dashboard')->with('msg', 'Arsenal deletado com sucesso!');
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

        if ($request->hasfile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/arsenais'), $imageName);

            $arsenal->image = $imageName;
        }

        $arsenal->save();

        return redirect('/arsenais/dashboard')->with('msg', 'Arsenal criado com sucesso!');
    }


    public function show($id)
    {
        $arsenal = Arsenal::findOrfail($id);

        $arsenalOwner = User::where('id', $arsenal->user_id)->first()->toArray();

        if(isset($arsenal)){
        return view('arsenais.show', ['arsenal' => $arsenal, 'arsenalOwner' => $arsenalOwner]);
        } else {
            return redirect('/')->with('msg', 'Arsenal n??o encontrado!');
        }     
    }

    public function dashboard()
    {
        $user = auth()->user();

        $arsenais = $user->arsenais;

        return view('arsenais.dashboard', ['arsenais' => $arsenais]);
    }

    public function searchA(){
        $search = request('search');
        if ($search) {
            $arsenais = Arsenal::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        } else{
            $arsenais = Arsenal::all();            
        }
        return view('arsenais.dashboard', ['arsenais' => $arsenais, 'search' => $search]);
    }


}
