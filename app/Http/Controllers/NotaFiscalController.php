<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotaFiscalController extends Controller
{
    public function notaFiscalIndex(){
        return view('application.nota-fiscal');
    }
}
