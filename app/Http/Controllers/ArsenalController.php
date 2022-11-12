<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArsenalController extends Controller
{

    public function index() {
        return view('arsenal');
    }

    public function create()
    {
        return view('arsenal.create');
    }

}
