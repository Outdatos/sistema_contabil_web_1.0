<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemonstrativosContabeisController extends Controller
{
    public function demonstrativosContabeisIndex(){
        return view('application.demonstrativos-contabeis');
    }
}
