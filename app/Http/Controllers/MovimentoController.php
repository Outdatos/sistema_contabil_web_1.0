<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovimentoController extends Controller
{
    public function movimentoIndex(){
        return view('application.meu-movimento');
    }
}
