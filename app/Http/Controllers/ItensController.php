<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItensController extends Controller
{

    public function index()
    {
        return view('itens');
    }

    public function create()
    {
        return view('itens.create');
    }
}
