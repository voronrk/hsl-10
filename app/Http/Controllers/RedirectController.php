<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public static function show(Request $request, string $param = '')
    {
        return view('index', ['data' => ['This is first route by controller.', $request->url(), $param]]);
    }
}