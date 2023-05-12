<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class jogosController extends Controller
{
    public function index() {
        // Acessando o model
        $jogos = Jogo::all();
        // dd($jogos);

        return view('jogos/index', ['jogos' => $jogos]);
    }
}
