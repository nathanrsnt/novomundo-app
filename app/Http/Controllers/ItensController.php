<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;

class ItensController extends Controller
{

    public function index()
    {
        $search = request('search');

        if ($search) {
            $itens = Item::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        } else{
            $itens = Item::all();            
        }

        return view('itens.all', ['itens' => $itens, 'search' => $search]);
    }

    public function create()
    {
        return view('itens.create');
    }

    public function store(Request $request)
    {
        $item = new Item();

        $item->nome = $request->nome;
        $item->tipo = $request->tipo;
        $item->estado = $request->estado;

        $user = auth()->user();
        $item->user_id = $user->id;

        if ($request->hasfile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/itens'), $imageName);

            $item->image = $imageName;
        }

        $item->save();

        return redirect('/itens/dashboard')->with('msg', 'Item criado com sucesso!');
    }

    public function show($id){

        $item = Item::findOrfail($id);

        $itemOwner = User::where('id', $item->user_id)->first()->toArray();

        return view('itens.show', ['item' => $item, 'itemOwner' => $itemOwner]);
    }

    public function dashboard(){
        
        $user = auth()->user();

        $itens = $user->itens;

        return view('itens.dashboard', ['itens' => $itens]);
    }

    public function searchI(){
        $search = request('search');

        if ($search) {
            $itens = Item::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        } else{
            $itens = Item::all();            
        }

        return view('itens.dashboard', ['itens' => $itens, 'search' => $search]);
    }

    public function destroy($id){
        Item::findOrfail($id)->delete();
        return redirect('/itens/dashboard')->with('msg', 'Item deletado com sucesso!');
    }

    public function update(Request $request, $id){
        $item = Item::findOrfail($id);

        $item->nome = $request->nome;
        $item->tipo = $request->tipo;
        $item->estado = $request->estado;

        $item->save();

        return redirect('/')->with('msg', 'Item atualizado com sucesso!');
    }
}
