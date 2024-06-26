<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuiasController extends Controller
{
    public function guiasPagamentoIndex(){
        return view('application.guias-pagamento');
    }
}
