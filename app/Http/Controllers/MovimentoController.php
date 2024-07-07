<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\MovimentoEnvio;
use Carbon\Carbon;
use App\Models\Competencia;

class MovimentoController extends Controller {
    public function movimentoIndex() {
        $user = auth()->user();

        // $registros = $user->movimentoEnvios()->with( 'competencia.mes', 'competencia.ano', 'movimentoTitle' )
        //     ->orderBy( 'competencia_id', 'desc' )
        //     ->orderBy( 'created_at', 'desc' )
        //     ->paginate( 15 );

        $competencias = Competencia::with( [ 'mes', 'ano' ] )->get();

        return view( 'application.meu-movimento', [
            // 'registros' => $registros,
            'competencias' => $competencias,
        ] );
    }

    public function movimentoStore(Request $request)
    {
        $user = auth()->user();
        $files = $request->file('files_anexos');
    
        $fileNames = [];
    
        if ($files) {
            foreach ($files as $file) {
                $path = $file->store('uploads', 'public');
                $fileNames[] = $path;
            }
        }
    
        MovimentoEnvio::create([
            'user_id' => $user->id,
            'admin_id' => 1,
            'atd' => false,
            'competencia_id' => $request->competencia_id,
            'descricao' => $request->descricao,
            'files_anexos' => json_encode($fileNames),
        ]);
    
        return response()->json(['message' => 'Movimento registrado com sucesso', 'files' => $fileNames], 200);
    }
    
    
    

}
