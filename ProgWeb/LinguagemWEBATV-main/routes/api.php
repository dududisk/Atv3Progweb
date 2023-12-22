<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('produto',[ProdutosController::class,'obAll']);
Route::post('produto',[ProdutosController::class,'obProducts']);
Route::patch('produto/{id}',[ProdutosController::class,'updateProducts']);
Route::delete('produto/{id}',[ProdutosController::class,'deleteProducts']);

Route::get('categoria',[CategoriaController::class,'categories']);
Route::post('categoria',[CategoriaController::class,'createCategories']);
Route::patch('categoria/{id}',[CategoriaController::class,'updateCategories']);
Route::delete('categoria/{id}',[CategoriaController::class,'deleteCategories']);


Route::get('pedido',[PedidoController::class,'allRequest']);
Route::post('pedido',[PedidoController::class,'createRequest']);
Route::patch('pedido/{id}',[PedidoController::class,'updateRequest']);
Route::delete('pedido/{id}',[PedidoController::class,'deleteRequest']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
