<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FolhaController;
use App\Http\Controllers\GuiasController;
use App\Http\Controllers\MovimentoController;
use App\Http\Controllers\NotaFiscalController;
use App\Http\Controllers\DemonstrativosContabeisController;
use App\Http\Controllers\CertidoesController;
use App\Http\Controllers\AlvarasLicencasController;
use App\Http\Controllers\DocumentosEmpresaController;
use App\Http\Controllers\AlteracaoCnpjController;
use App\Http\Controllers\CertificadoDigitalController;
use App\Http\Controllers\ImpostoRendaController;
use App\Http\Controllers\ProcessosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();


// Define a group of routes with 'auth' middleware applied
Route::middleware(['auth'])->group(function () {
    // Define a GET route for the root URL ('/')
    Route::get('/', function () {
        return view('index');
    });

    // Define as rotas do movimento do mês
    Route::get('meu-movimento', [MovimentoController::class, 'movimentoIndex'])->name('movimento.index');

    // Define as rotas das guias de pagamento
    Route::get('guias-pagamento', [GuiasController::class, 'guiasPagamentoIndex'])->name('guias.pagamento.index');

    // Define as rotas da folha 
    Route::get('folha-pagamento', [FolhaController::class, 'folhaPagamentoIndex'])->name('folha.pagamento.index');
    Route::get('folha-colaboradores', [FolhaController::class, 'folhaColaboradoresIndex'])->name('folha.colaboradores.index');
    Route::get('folha-ferias', [FolhaController::class, 'folhaFeriasIndex'])->name('folha.ferias.index');
    Route::get('folha-atestados', [FolhaController::class, 'folhaAtestadosIndex'])->name('folha.atestados.index');

    // Define as rotas da emissão de nota
    Route::get('nota-fiscal', [NotaFiscalController::class, 'notaFiscalIndex'])->name('notaFiscal.index');
    
    // Define as rotas de demonstrativos contabeis
    Route::get('demonstrativos-contabeis', [DemonstrativosContabeisController::class, 'demonstrativosContabeisIndex'])->name('demonstrativosContabeis.index');
    
    // Define as rotas das certidoes
    Route::get('certidoes', [CertidoesController::class, 'certidoesIndex'])->name('certidoes.index');

    // Define as rotas das certidoes
    Route::get('alvaras-licencas', [AlvarasLicencasController::class, 'alvarasLicencasIndex'])->name('alvarasLicencas.index');
    
    // Define as rotas dos documentos empresariais
    Route::get('documentos-empresa', [DocumentosEmpresaController::class, 'documentosEmpresaIndex'])->name('documentosEmpresa.index');
    
    // Define as rotas de serviços
    Route::get('alteracao-cnpj', [AlteracaoCnpjController::class, 'alteracaoCnpjIndex'])->name('alteracaoCnpj.index');
    Route::get('certificado-digital', [CertificadoDigitalController::class, 'certificadoDigitalIndex'])->name('certificadoDigital.index');
    Route::get('imposto-renda', [ImpostoRendaController::class, 'impostoRendaIndex'])->name('impostoRenda.index');

    // Define as rotas de processos
    Route::get('processos-andamento', [ProcessosController::class, 'processosAndamentoIndex'])->name('processos.andamento.index');
    Route::get('processos-finalizados', [ProcessosController::class, 'processosFinalizadosIndex'])->name('processos.finalizados.index');
   











    // Define a GET route with dynamic placeholders for route parameters
    Route::get('{routeName}/{name?}', [HomeController::class, 'pageView']);
});
