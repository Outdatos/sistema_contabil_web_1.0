<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentosEmpresaController extends Controller
{
    public function documentosEmpresaIndex(){
        return view('application.documentos-empresa-index');
    }
}
