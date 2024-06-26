<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlteracaoCnpjController extends Controller
{
    public function alteracaoCnpjIndex(){
        return view('application.alteracao-cnpj');
    }
}
