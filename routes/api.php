<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function(){
    return response()->json([
        'user' => [
            'first_name' => 'joao da pinga beba',
            'last_name' => 'joao da pinga braba'
        ]
    ]);
});

Route::resource('imagems', 'ImagemController');
Route::resource('perfil_clientes', 'PerfilClienteController');
Route::resource('portifolios','PortifolioController');