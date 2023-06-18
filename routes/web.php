<?php


use App\Http\Controllers\CartController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowroomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/my-account', [HomeController::class, 'myAccount'])->name('account');
Route::get('/my-order',[OrderController::class,'myOrder'])->name('order');
Route::post('/order-store',[OrderController::class,'orderStore'])->name('orderCreate');


Route::get('/login-form',[LoginController::class,'loginForm'])->name('loginForm');
Route::get('/login-as',[LoginController::class,'loginAs'])->name('loginAs');
Route::post('/loginn',[LoginController::class,'login'])->name('login');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::get ('/user-register',[UserController::class,'userRegisterForm'])->name('user');
Route::post('/user-create',[UserController::class,'userCreate'])->name('userCreate');

Route::get ('/designer-register',[DesignerController::class,'designerRegisterForm'])->name('designer');
Route::post('/designer-create',[DesignerController::class,'designerCreate'])->name('designerCreate');

Route::get ('/showroom-register',[ShowroomController::class,'showroomRegisterForm'])->name('showroom');
Route::post('/showroom-create',[ShowroomController::class,'showroomCreate'])->name('showroomCreate');

Route::post('/cart/{id}', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/cart-update-inc/{id}', [CartController::class, 'updateCartInc'])->name('cart.updateInc');
Route::post('/cart-update-dec/{id}', [CartController::class, 'updateCartDec'])->name('cart.updateDec');
Route::post('/clear-cart',[CartController::class,'clearCart'])->name('clearCart');

Route::get('/cart', [CartController::class, 'cartList'])->name('cartList');
Route::post('/cart-remove/{id}', [CartController::class, 'removeCart'])->name('cartRemove');


Route::get('/product-details/{id}',[ProductController::class,'itemDetails'])->name('details');
//Route::get('/similar/',[ItemController::class,'similarProducts'])->name('similarProducts');



