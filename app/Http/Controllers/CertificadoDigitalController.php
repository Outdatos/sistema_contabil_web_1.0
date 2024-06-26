<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificadoDigitalController extends Controller
{
    public function certificadoDigitalIndex(){
        return view('application.certificado-digital');
    }
}
