<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() {
        // dd('Olá Mundo');
        $nome = 'Wanderson';
        return view('home', ['nome' => $nome]);
    }
}
