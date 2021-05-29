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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/posts', 'HomeController@posts'); *Синтаксис до Laravel 8*
/*Так как у меня установилась 8-версия Laravel, пришлось писать по новому синтаксису*/

use App\Http\Controllers\HomeController;  //Синтаксис для Laravel 8
Route::get('/', [ HomeController::class, 'index' ]);
Route::get('/aboutus', [ HomeController::class, 'aboutus' ]);

use App\Http\Controllers\PostController;
Route::group(['prefix' => '/posts'], function () {
    Route::get('/', [ PostController::class, 'index' ]);
    Route::get('/create', [ PostController::class, 'create' ]);
    Route::get('/edit', [ PostController::class, 'edit' ]);
    Route::get('/delete', [ PostController::class, 'delete' ]);
});


use App\Http\Controllers\ProductController;
Route::get('/products', [ ProductController::class, 'index' ]);
Route::get('/products/create', [ ProductController::class, 'create' ]);
Route::get('/products/edit', [ ProductController::class, 'edit' ]);
Route::get('/products/delete', [ ProductController::class, 'delete' ]);

use App\Http\Controllers\UserController;
Route::get('/user', [ UserController::class, 'profile' ]);
Route::get('/user/reg', [ UserController::class, 'reg' ]);
Route::get('/user/edit', [ UserController::class, 'edit' ]);
Route::get('/user/delete', [ UserController::class, 'delete' ]);

use App\Http\Controllers\FAQController;
Route::get('/faq', [ FAQController::class, 'index' ]);
Route::get('/faq/create', [ FAQController::class, 'create' ]);
Route::get('/faq/edit', [ FAQController::class, 'edit' ]);
Route::get('/faq/delete', [ FAQController::class, 'delete' ]);