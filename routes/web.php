<?php

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

//Route pagina Inicial

Route::get('/', function () {
    return view('index');})->name('pagina.index');

//Route Pesquisa

Route::get('/pesquisa','App\Http\Controllers\ProcuraController@index')
    ->name('pesquisa.index');

Route::post('/formenv','App\Http\Controllers\ProcuraController@formenviado')
    ->name('pesquisa.show');

//Route Clientes

Route::get('/cliente','App\Http\Controllers\ClientesController@index')
    ->name('cliente.index');

Route::get('/cliente/{id_cliente}/show','App\Http\Controllers\ClientesController@show')
    ->name('cliente.show');

Route::get('/clientes/create','App\Http\Controllers\ClientesController@create')
    ->name('cliente.create');

Route::post('/clientes/store','App\Http\Controllers\ClientesController@store')
    ->name('cliente.store');

Route::get('/clientes/{id_cliente}/edit','App\Http\Controllers\ClientesController@edit')
    ->name('cliente.edit');

Route::patch('/clientes/{id_cliente}/update','App\Http\Controllers\ClientesController@update')
    ->name('cliente.update');

Route::get('/clientes/{id_cliente}/deleted','App\Http\Controllers\ClientesController@deleted')
    ->name('cliente.deleted');

Route::delete('/clientes/{id_cliente}/destroy','App\Http\Controllers\ClientesController@destroy')
    ->name('cliente.destroy');

//Route Encomendas

Route::get('/encomendas','App\Http\Controllers\EncomendasController@index')
    ->name('encomendas.index');

Route::get('/encomendas/{id_encomenda}/show','App\Http\Controllers\EncomendasController@show')
    ->name('encomendas.show');

Route::get('/encomendas/create','App\Http\Controllers\EncomendasController@create')
    ->name('encomendas.create');

Route::post('/encomendas/store','App\Http\Controllers\EncomendasController@store')
    ->name('encomendas.store');

Route::get('/encomendas/{id_encomenda}/edit','App\Http\Controllers\EncomendasController@edit')
    ->name('encomendas.edit');

Route::patch('/encomendas/{id_encomenda}/update','App\Http\Controllers\EncomendasController@update')
    ->name('encomendas.update');

Route::get('/encomendas/{id_encomenda}/deleted','App\Http\Controllers\EncomendasController@deleted')
    ->name('encomendas.deleted');

Route::delete('/encomendas/{id_encomenda}/destroy','App\Http\Controllers\EncomendasController@destroy')
    ->name('encomendas.destroy');


//Route Produtos

Route::get('/produtos','App\Http\Controllers\ProdutosController@index')
    ->name('produtos.index');

Route::get('/produtos/{id_produtos}/show','App\Http\Controllers\ProdutosController@show')
    ->name('produtos.show');

Route::get('/produtos/create','App\Http\Controllers\ProdutosController@create')
    ->name('produtos.create');

Route::post('/produtos/store','App\Http\Controllers\ProdutosController@store')
    ->name('produtos.store');

Route::get('/produtos/{id_produtos}/edit','App\Http\Controllers\ProdutosController@edit')
    ->name('produtos.edit');

Route::patch('/produtos/{id_produtos}/update','App\Http\Controllers\ProdutosController@update')
    ->name('produtos.update');

Route::get('/produtos/{id_produtos}/deleted','App\Http\Controllers\ProdutosController@deleted')
    ->name('produtos.deleted');

Route::delete('/produtos/{id_produtos}/destroy','App\Http\Controllers\ProdutosController@destroy')
    ->name('produtos.destroy');

//Route Vendedores

Route::get('/vendedores','App\Http\Controllers\VendedoresController@index')
    ->name('vendedores.index');

Route::get('/vendedores/{id_vendedor}/show','App\Http\Controllers\VendedoresController@show')
    ->name('vendedores.show');
    
Route::get('/vendedores/create','App\Http\Controllers\VendedoresController@create')
    ->name('vendedores.create');

Route::post('/vendedores/store','App\Http\Controllers\VendedoresController@store')
    ->name('vendedores.store');

Route::get('/vendedores/{id_vendedor}/edit','App\Http\Controllers\VendedoresController@edit')
    ->name('vendedores.edit');

Route::patch('/vendedores/{id_vendedor}/update','App\Http\Controllers\VendedoresController@update')
    ->name('vendedores.update');

Route::get('/vendedores/{id_vendedor}/deleted','App\Http\Controllers\VendedoresController@deleted')
    ->name('vendedores.deleted');

Route::delete('/vendedores/{id_vendedor}/destroy','App\Http\Controllers\VendedoresController@destroy')
    ->name('vendedores.destroy');