<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Competencia;


class MovimentoController extends Controller
{
    public function movimentoIndex()
    {
        $user = auth()->user();

        // $registros = $user->movimentoEnvios()->with('competencia.mes', 'competencia.ano', 'movimentoTitle')
        //     ->orderBy('competencia_id', 'desc')
        //     ->orderBy('created_at', 'desc')
        //     ->paginate(15);

        $competencias = Competencia::with(['mes', 'ano'])->get();

        return view('application.meu-movimento', [
            // 'registros' => $registros,
            'competencias' => $competencias,
        ]);
    }

    public function movimentoStore(Request $request)
    {
        dd($request->all());
    }
}
