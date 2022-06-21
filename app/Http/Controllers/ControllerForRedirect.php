<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;

class ControllerForRedirect extends Controller
{
    public static function show(Request $request)
    {
        return view('pages.main', ['data' => [
            'This is first route from controller.',
            print_r($request,true)
            ]]);
    }
}