<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessosController extends Controller
{
    public function processosAndamentoIndex(){
        return view('application.processos-andamento');
    }

    public function processosFinalizadosIndex(){
        return view('application.processos-finalizados');
    }
}
