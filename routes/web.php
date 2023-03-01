<?php

use App\Mail\newUnitech;
use App\Models\Estudante;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/admin/{any}', function () {
    return view('welcome');
})->where('any', '.*');

Route::get('/', function () {
    return view('home',[
        'pagina' => null
    ]);
});

Route::get('/home', function () {
    return view('home',[
        'pagina' => null
    ]);
});

Route::get('testemail', function () {
    $user = User::findOrFail(1);
    $estudante = Estudante::findOrFail(1)->getAttributes();
    // return new newUnitech($user, $estudante);
    Mail::send(new newUnitech($user, $estudante, 'teste'));
});

Route::get('/formularios', function () {
    return view('formularios', [
        'pagina' => null
    ]);
});

Route::get('/estudante', function () {
    return view('estudante', [
        'pagina' => 'estudante'
    ]);
});

Route::get('/colaborador', function () {
    return view('colaborador', [
        'pagina' => 'colaborador'
    ]);
});

Route::get('/proponente', function () {
    return view('proponente', [
        'pagina' => 'proponente'
    ]);
});

Route::get('/projetos', function () {
    return view('projetos.ativos', [
        'pagina' => 'projetos'
    ]);
});

Route::get('/projetos-concluidos', function () {
    return view('projetos.concluidos', [
        'pagina' => 'projetos'
    ]);
});

Route::get('/vagas-estagio', function () {
    return view('vagas.estagio', [
        'pagina' => null
    ]);
});

Route::get('/vagas-emprego', function () {
    return view('vagas.emprego', [
        'pagina' => null
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
