<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertidoesController extends Controller
{
    public function certidoesIndex(){
        return view('application.certidoes-list');
    }
}
