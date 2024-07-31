<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\MusculacaoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TreinoController;
use App\Http\Middleware\AutAcademiaMiddle;
use App\Http\Middleware\LogAcessoAcademia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
    // return view('home');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');


Route::get('/treino', [TreinoController::class, 'index'])->name('treino');



// Route::middleware(LogAcessoAcademia::class)->get('/contato', [ContatoController::class, 'index'])->name('contato');

 Route::get('/contato', [ContatoController::class, 'index'])->name('contato');




Route::post('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');


Route::post('/contato/enviarNew', [ContatoController::class, 'salvarNoEmail'])->name('contato.enviarNew');

Route::get('/modalidade', [ModalidadeController::class, 'index'])->name('modalidade');

Route::get('/modalidade/musculacao', [ModalidadeController::class, 'musculacao'])->name('modalidade.musculacao');

Route::get('/modalidade/treinofuncional', [ModalidadeController::class, 'treinofuncional'])->name('modalidade.treinofuncional');

Route::get('/modalidade/meditacao', [ModalidadeController::class, 'meditacao'])->name('modalidade.meditacao');

Route::get('/modalidade/boxe', [ModalidadeController::class, 'boxe'])->name('modalidade.boxe');

Route::get('/modalidade/yoga', [ModalidadeController::class, 'yoga'])->name('modalidade.yoga');

route::get('/noticia', [NoticiaController::class, 'index'])->name('noticia');







route::get('/login', [LoginController::class, 'index'])->name('login');

route::post('/login', [LoginController::class, 'autenticar'])->name('login');
// criampos a copia autenticar o usuario
// criação da rota, para encontrar o caminho da url




// criar um controller para aluno

// route::middleware(['autenticacao:administrador'])->group(function (){
//     Route::get('/dashboard/administrador', [AdministradorController::class, 'administrador'])->name('dashboard.administrador.administrador');
// });


route::middleware(['autenticacao:administrativo'])->group(function(){

    // ADM / FUNCIONARIO

 Route::get('dashboard/administrador', [AdministradorController::class, 'administrativo'])->name('dashboard.administrador.administrador');

 Route::get('dashboard/administrador/ativo', [AdministradorController::class, 'indexFunc'])->name('dashboard.administrador.funcionario.index');



 Route::post('dashboard/administrador/ativo', [AdministradorController::class, 'cadFunc'])->name('dashboard.administrador.funcionario.cad');
 Route::get('dashboard/administrador/criar', [AdministradorController::class, 'createFunc'])->name('dashboard.administrador.funcionario.create');








 Route::get('dashboard/administrador/editar/{id}', [AdministradorController::class, 'editFunc'])->name('dashboard.administrador.funcionario.edit');
 Route::put('dashboard/administrador/atualizar/{id}', [AdministradorController::class, 'updateFunc'])->name('dashboard.administrador.funcionario.update');

 Route::put('dashboard/administrador/desativar/{id}', [AdministradorController::class, 'desativarFunc'])->name('dashboard.administrador.funcionario.desativar');


// ADM / ALUNO

Route::get('dashboard/administrador/aluno/ativo', [AdministradorController::class, 'indexAluno'])->name('dashboard.administrador.aluno.index');

Route::post('dashboard/administrador/aluno/ativo', [AdministradorController::class, 'cadAluno'])->name('dashboard.administrador.aluno.cad');
Route::get('dashboard/administrador/aluno/criar', [AdministradorController::class, 'createAluno'])->name('dashboard.administrador.aluno.create');


Route::get('dashboard/administrador/aluno/editar/{id}', [AdministradorController::class, 'editAluno'])->name('dashboard.administrador.aluno.edit');
Route::put('dashboard/administrador/aluno/atualizar/{id}', [AdministradorController::class, 'updateAluno'])->name('dashboard.administrador.aluno.update');


Route::put('dashboard/administrador/aluno/desativar/{id}', [AdministradorController::class, 'desativarAluno'])->name('dashboard.administrador.aluno.desativar');

// Route::put('dashboard/administrador/reativar/{id}', [AdministradorController::class, 'reativarFunc'])->name('dashboard.administrador.reativar');
// Route::get('dashboard/administrador/perfil', [AdministradorController::class, 'showFunc'])->name('dashboard.administrador.funcionario.show');


});









//  Route::post('dashboard/administrador/ativo', [AdministradorController::class, 'cadAluno'])->name('dashboard.administrador.aluno.cad');
//  Route::get('dashboard/administrador/criar', [AdministradorController::class, 'createAluno'])->name('dashboard.administrador.aluno.create');

//  Route::get('dashboard/administrador/editar/{id}', [AdministradorController::class, 'editAluno'])->name('dashboard.administrador.aluno.edit');
//  Route::put('dashboard/administrador/atualizar/{id}', [AdministradorController::class, 'updateAluno'])->name('dashboard.administrador.aluno.update');

//  Route::put('dashboard/administrador/desativar/{id}', [AdministradorController::class, 'desativarAluno'])->name('dashboard.administrador.aluno.desativar');







// api do aluno
route::middleware(['auth:sanctum', 'aluno'])->group(function (){

    Route::get('/dashboard/aluno', [AlunoController::class, 'aluno'])->name('dashboard.aluno.aluno');

    // api do aluno
    Route::post('login', [AlunoController::class, 'login']);

});





Route::middleware(['autenticacao:instrutor'])->group(function (){

    Route::get('/dashboard/instrutor', [FuncionarioController::class, 'instrutor'])->name('dashboard.instrutor.instrutor');

});



// route::get('/dashboard/instrutor/instrutor', [AlunoController::class, 'instrutor'])->name('dashboard.instrutor.instrutor');


// sobre o botao de sair das pags
Route::get('/sair', function(){
    session()->flush();
    return redirect('/');
})->name('sair');
