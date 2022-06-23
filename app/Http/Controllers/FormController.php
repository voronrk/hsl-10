<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function show($param = '')
    {
        return view('form', ['param' => $param]);
    }    
}
