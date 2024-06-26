<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolhaController extends Controller
{
    public function folhaPagamentoIndex(){
        return view('application.folha-pagamento');
    }

    public function folhaColaboradoresIndex(){
        return view('application.folha-colaboradores');
    }

    public function folhaFeriasIndex(){
        return view('application.folha-ferias');
    }

    public function folhaAtestadosIndex(){
        return view('application.folha-atestados');
    }
}
