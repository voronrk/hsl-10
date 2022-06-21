<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;

class ControllerForRedirect extends Controller
{
    public static function show()
    {
        return view('index', ['data' => ['This is first route by controller.']]);
    }
}