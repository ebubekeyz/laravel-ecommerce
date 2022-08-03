<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', [UserController::class, 'login']);

Route::post('/users.login', [UserController::class, 'loginAuth']);


Route::get('/', [ProductController::class, 'index']);

Route::get('addproducts', [ProductController::class, 'addProducts']);
Route::post('addproducts', [ProductController::class, 'addProductStore']);

Route::get('/users.register', [UserController::class, 'register']);
Route::post('/users.register', [UserController::class, 'store']);

Route::get('detail/{id}', [ProductController::class, 'detail']);

Route::post('/logout', function(){
    Session::forget('user');
    return redirect('/');


});

Route::post('/add_to_cart', [ProductController::class, 'addToCart']);

Route::get('cartlist', [ProductController::class, 'cartList']);


Route::get('search', [ProductController::class, 'search']);


Route::get('removecart/{id}', [ProductController::class, 'removeCart']);

Route::get('ordernow', [ProductController::class, 'orderNow']);

Route::post('orderplace', [ProductController::class, 'orderPlace']);

Route::get('myorders', [ProductController::class, 'myOrders']);

Route::get('manage', [ProductController::class, 'manageProducts']);

Route::delete('delete/{id}', [ProductController::class, 'delete']);

Route::get('edit/{id}', [ProductController::class, 'editStore']);

Route::put('edit/{id}', [ProductController::class, 'update']);

