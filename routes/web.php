<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\FormController;
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

//Default route. Show page without data
Route::get('/', function () {
    return view('index', ['data' => ['This is default route.']]);
});

//Route-1. Show page with some information.
Route::get('/1', function () {
    return view('index', ['data' => ['This is first route.']]);
})->middleware('hawking');

//Route-1.1. Working like route-1 but make by controller.
Route::get('/11', [RedirectController::class, 'show'])->middleware('hawking');

//Route-2. Redirect to route-1.
Route::permanentRedirect('/2', '/1')->middleware('hawking');

//Route-3. With required parameter
Route::get('/3/{param}', [RedirectController::class, 'show'])->middleware('hawking');

//Route-4.
Route::get('/4')->middleware('hawking');

//Form route.
Route::get('/form/{param?}', [FormController::class, 'show']);

//Profile route.
Route::post('/profile', [ProfileController::class, 'show'])->middleware('hawkingForm');