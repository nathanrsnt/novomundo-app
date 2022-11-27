<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Personagem;
use App\Models\User;

class PersonagemController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('personagem.dashboard', compact('user'));
    }
}
