<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlvarasLicencasController extends Controller
{
    public function alvarasLicencasIndex(){
        return view('application.alvaras-licencas');
    }
}
