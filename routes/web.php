<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerForRedirect;
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

Route::get('/', function () {
    return view('index', ['view' => view('pages.main', [])]);
});

Route::get('/1', function () {
    return view('index', ['view' => view('pages.main', ['data' => ['This is first route.']])]);
});

Route::get('/11', function (Request $request) {
    return view('index', ['view' => ControllerForRedirect::show($request)]);
});

Route::permanentRedirect('/2', '/1');


