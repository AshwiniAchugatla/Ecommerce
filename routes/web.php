<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\inwardController;
use App\Http\Controllers\productstockController;


//frontend Controller
use App\Http\Controllers\homeController;
use App\Http\Controllers\UserController;





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

Route::get('/index', [AdminController::class,'index'])->middleware('isLoggedIn');
Route::resource('category',categoryController::class)->middleware('isLoggedIn');
Route::resource('product',productController::class)->middleware('isLoggedIn');

Route::get('userregister', [AdminController::class,'user'])->middleware('isLoggedIn');
Route::delete('userregister_delete/{id}', [AdminController::class,'userregister_delete']);

Route::get('shippingdetails', [AdminController::class,'shippingdetails'])->middleware('isLoggedIn');
Route::delete('shippingdetails_delete/{id}', [AdminController::class,'shippingdetails_delete']);
Route::get('orderdetails', [AdminController::class,'orderdetails'])->middleware('isLoggedIn');
Route::delete('orderdetails_delete/{id}', [AdminController::class,'orderdetails_delete']);
Route::get('checkoutdetails', [AdminController::class,'checkoutdetails'])->middleware('isLoggedIn');
Route::delete('checkoutdetails_delete/{id}', [AdminController::class,'checkoutdetails_delete']);

Route::resource('inward',inwardController::class)->middleware('isLoggedIn');
Route::resource('stock',productstockController::class)->middleware('isLoggedIn');

Route::get('/login',[AdminController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[AdminController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-admin',[AdminController::class,'registerAdmin'])->name('register-admin');
Route::post('/login-admin',[AdminController::class,'loginAdmin'])->name('login-admin');
Route::get('/logout',[AdminController::class,'logout']);



//frontend links
Route::get('index1',[homeController::class,'index1']);
Route::get('shop',[homeController::class,'product']);
Route::get('subproduct/{id}',[homeController::class,'subproduct']);
Route::get('detail/{id}',[homeController::class,'detail']);
Route::get('cart/{id}',[homeController::class,'Addtocart']);
Route::get('shoppingcart',[homeController::class,'viewcart']);
Route::get('remove/{id}',[homeController::class,'remove']);
Route::get('contact',[homeController::class,'contact']);
Route::post('usercontact',[homeController::class,'usercontact'])->name('usercontact');
Route::get('checkout',[homeController::class,'index'])->middleware('loggedIn');
Route::post('shipping',[homeController::class,'shipping'])->name('shipping');
//Route::post('search',[homeController::class,'search'])->name('search');

Route::get('/userlogin',[UserController::class,'userlogin']);
Route::get('/userregistration',[UserController::class,'userregistration']);
Route::post('/register-user',[UserController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[UserController::class,'loginUser'])->name('login-user');
Route::get('/userlogout',[UserController::class,'userlogout']);


