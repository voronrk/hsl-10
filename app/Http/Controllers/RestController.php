<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestController extends Controller
{
    function getData() 
    {
        return json_encode('This is data from Rest API controller');
    }
}
