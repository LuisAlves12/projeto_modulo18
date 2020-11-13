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

//Route Pesquisa

Route::get('/','App\Http\Controllers\ProcuraController@index')->name('pesquisa.index');

Route::post('/formenv','App\Http\Controllers\ProcuraController@formenviado')->name('pesquisa.show');

//Route Clientes

Route::get('/cliente','App\Http\Controllers\ClientesController@index')->name('cliente.index');

Route::get('/cliente/{id_cliente}/show','App\Http\Controllers\ClientesController@show')->name('cliente.show');

//Route Encomendas

Route::get('/encomendas','App\Http\Controllers\EncomendasController@index')->name('encomendas.index');

Route::get('/encomendas/{id_encomenda}/show','App\Http\Controllers\EncomendasController@show')->name('encomendas.show');

//Route Produtos

Route::get('/produtos','App\Http\Controllers\ProdutosController@index')->name('produtos.index');

Route::get('/produtos/{id_produtos}/show','App\Http\Controllers\ProdutosController@show')->name('produtos.show');

//Route Vendedores

Route::get('/vendedores','App\Http\Controllers\VendedoresController@index')->name('vendedores.index');

Route::get('/vendedores/{id_vendedor}/show','App\Http\Controllers\VendedoresController@show')->name('vendedores.show');