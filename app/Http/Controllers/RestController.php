<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestController extends Controller
{
    function getData() 
    {
        return json_encode('This is data from Rest API controller');
    }

    function getSecretData() 
    {
        return json_encode('This is VERY SECRET data from Rest API controller');
    }

    function accessDenied() 
    {
        return json_encode('Access denied!');
    }
}
