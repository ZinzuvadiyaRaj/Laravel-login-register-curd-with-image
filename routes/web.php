<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'],function () 
{

    // AuthController Routes (REGISTRATION)::

    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class,'registerPost'])->name('register');

    // AuthController Routes (LOGIN)::

    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'],function () 
{

    // DashboardController Routes ::

    Route::resource('dashboard',DashboardController::class);


    // CategoryController Routes ::

    Route::get('category',[CategoryController::class,'index'])->name('category');
    Route::get('category/create',[CategoryController::class,'create'])->name('category/create');
    Route::post('category/test',[CategoryController::class,'test'])->name('category/test');
    Route::delete('category/destory/{id}', [CategoryController::class,'destroy'])->name('category/destroy');
    Route::get('category/edit/{id}', [CategoryController::class,'edit'])->name('category/edit');
    Route::put('category/update/{id}', [CategoryController::class,'update'])->name('category/update');
    
    
    // ImageController Routes ::
    
    Route::get('image',[ImageController::class,'index'])->name('image'); 
    Route::get('image/create',[ImageController::class,'create'])->name('image/create'); 
    Route::post('image/store',[ImageController::class,'store'])->name('image/store'); 
    Route::delete('image/destroy/{id}',[ImageController::class,'destroy'])->name('image/destroy'); 
    Route::get('image/edit/{id}',[ImageController::class,'edit'])->name('image/edit'); 
    Route::put('image/update/{id}', [ImageController::class,'update'])->name('image/update');
    

    // AuthController Routes (LOGOUT)::

    Route::delete('/logout',[AuthController::class,'logout'])->name('logout');
});


Route::view('master','layouts.master');

?>

