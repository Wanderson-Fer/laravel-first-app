<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jogosController extends Controller
{
    public function index() {
        $id = '1';
        $nome = 'Xadrez';
        return view('jogos/index', ['nome' => $nome, 'id' => $id]);
    }
}
