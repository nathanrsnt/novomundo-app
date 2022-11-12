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
}
