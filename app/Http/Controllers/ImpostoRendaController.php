<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpostoRendaController extends Controller
{
    public function impostoRendaIndex(){
        return view('application.imposto-renda');
    }
}
