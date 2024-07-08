<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Services\ValidationMessagesService;
use Carbon\Carbon;
use App\Models\MovimentoEnvio;
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

    public function movimentoStore( Request $request ) {
        
        $validatedData = $request->validate([
            'competencia_id' => 'required',
            'descricao' => 'required',
            'files_anexos' => 'required|array|min:1', 
            'files_anexos.*' => 'file|mimes:jpg,jpeg,png,pdf,rar,zip,ofx,xls,xlsx,doc,docx|max:20480' 
        ], ValidationMessagesService::messages());
        
        $user = auth()->user();

        $files = $request->file( 'files_anexos' );

        $fileNames = [];

        if ( $files ) {
            foreach ( $files as $file ) {
                $originalName = $file->getClientOriginalName();
                $uniqueName = pathinfo( $originalName, PATHINFO_FILENAME ) . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs( 'clients/movimentos_fechamento', $uniqueName, 'public' );
                $fileNames[] = $uniqueName;
            }
        }

        MovimentoEnvio::create( [
            'user_id' => $user->id,
            'admin_id' => 1,
            'atd' => false,
            'competencia_id' => $validatedData[ 'competencia_id' ],
            'descricao' => $validatedData[ 'descricao' ],
            'files_anexos' => json_encode( $fileNames ),
        ] );

        return response()->json( [ 'message' => 'Movimento registrado com sucesso', 'files' => $fileNames ], 200 );
    }

}
