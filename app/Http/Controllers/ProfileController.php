<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function show(Request $request)
    {
        return view('index', ['data' => ['name' => $request->all()['name'], 'e-mail' => $request->all()['email']]]);
    }    
}
