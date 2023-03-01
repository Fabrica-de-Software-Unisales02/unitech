<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/maisuma', function(){
    return ['mensagem' => 'ela sai eu boto calsinha'];
});


// Projetos

Route::namespace('App\Http\Controllers\Api')->group(function() {

    Route::post('/login', 'Auth\LoginJwtController@login')->name('login');
    Route::get('/Logout', 'Auth\LoginJwtController@login')->name('logout');

    Route::group(['middleware' => 'api'], function() {
        // Route::post('login', 'AuthController@login');
        // Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');

    });

    Route::prefix('projeto')->group(function() {
        Route::get('/', 'ProjetoController@index');
        Route::get('/{id}', 'ProjetoController@show');
    });

    Route::get('projetos', 'ProjetoController@indexAll');

    Route::prefix('cursos')->group(function() {
        Route::get('/', 'CursoController@index');
        Route::get('/{id}', 'CursoController@show');
    });

    Route::prefix('/areaAtuacao')->group(function() {
        Route::get('/', 'AreaAtuacaoController@index');
        Route::get('/{id}', 'AreaAtuacaoController@show');
    });

    Route::prefix('/areaAP')->group(function() {
        Route::get('/', 'AreaAtuacaoProjetoController@index');
        Route::get('/{id}', 'AreaAtuacaoProjetoController@show');
    });

    Route::prefix('/estudante')->group(function() {
        Route::post('/', 'EstudanteController@store');
    });

    Route::prefix('/colaborador')->group(function() {
        Route::post('/', 'ColaboradorController@store');
    });

    Route::prefix('/empresa')->group(function() {
        Route::post('/', 'EmpresaController@store');
    });

    Route::prefix('/pessoa_fisica')->group(function() {
        Route::post('/', 'PessoaFisicaController@store');
    });



    // Login Required
    Route::prefix('/admin')->group(function() {
        Route::group(['middleware' => ['jwt.auth']], function() {

            Route::resource('/user', 'UserController');

            Route::resource('/estudante', 'EstudanteController');
            Route::resource('/colaborador', 'ColaboradorController');
            Route::resource('/empresa', 'EmpresaController');
            Route::resource('/pessoa_fisica', 'PessoaFisicaController');

            Route::resource('/curso', 'CursoController');

            Route::resource('/areaAP', 'AreaAtuacaoProjetoController');
            Route::resource('/areaAtuacao', 'AreaAtuacaoController');

            Route::prefix('projeto')->group(function() {
                Route::post('/', 'ProjetoController@save');
                Route::put('/{id}', 'ProjetoController@update');
                Route::delete('/{id}', 'ProjetoController@delete');
            });

        });
    });
});
