<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Password2Controller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\MainpageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/home", HomeController::class)->middleware('auth');
Route::get("/aboutus", [HomeController::class,'create']);
Route::get("/contactus", [HomeController::class,'create2']);
Route::post('/contactus', [HomeController::class, 'store'])->name('contactus.themmoi');
Route::post('/search',[MainpageController::class, 'search']);

//Route::get('/category/create', [CategoryController::class, 'create']);
//Route::post('/category/create', [CategoryController::class, 'store'])->name('category.themmoi');

Route::post('/searchEvent',[EventController::class, 'searchEvent']);

Route::resource("/mainpage", MainpageController::class)->middleware('auth');
Route::get("/show2", [MainpageController::class,'show2']);
Route::get('/showprice1',[MainpageController::class,'showprice1']);
Route::get('/showprice2',[MainpageController::class,'showprice2']);
Route::get('/showprice3',[MainpageController::class,'showprice3']);
Route::get('/showprice4',[MainpageController::class,'showprice4']);

Route::resource("/event", EventController::class)->middleware('auth');
Route::get('/mainpage',[MainpageController::class, 'index']);


Route::post('/add_customer',[LoginController::class, 'add_customer']);
Route::post('/login_customer',[LoginController::class, 'login_customer']);
Route::get('/logout',[LoginController::class, 'logout']);


//Checkout
Route::post('/save_cart',[CartController::class, 'save_cart']);
Route::get('/checkout',[CartController::class, 'checkout']);
Route::get('/delete_cart/{rowId}',[CartController::class, 'delete_cart']);
Route::post('/update_cart_quantity',[CartController::class, 'update_cart_quantity']);

//Payment
Route::get('/payment',[PaymentController::class, 'payment']);
Route::post('/payment_info',[PaymentController::class, 'payment_info']);
Route::post('/order1',[PaymentController::class, 'order1']);
Route::post('/order2',[PaymentController::class, 'order2']);
Route::post('/order3',[PaymentController::class, 'order3']);

Route::resource("/password", PasswordController::class)->middleware('auth');
Route::resource("/password2", Password2Controller::class)->middleware('auth');
Route::resource("/customer", CustomerController::class)->middleware('auth');

Route::post('/load_comment',[CommentController::class, 'load_comment']);
Route::post('/send_comment',[CommentController::class, 'send_comment']);
Route::post('/insert_rating',[ProductController::class, 'insert_rating']);
Route::resource("/customer", CustomerController::class)->middleware('auth');


Route::resource("/product", ProductController::class)->middleware('auth');
Route::resource("/category", DanhMucController::class)->middleware('auth');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
