<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;

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

//Default route. Show post form
Route::get('/{param?}', [PostController::class, 'create']);

//Store route
Route::post('/store', [PostController::class, 'store'])->middleware('postUnique');