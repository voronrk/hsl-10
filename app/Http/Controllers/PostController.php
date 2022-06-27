<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function create($param = '')
    {
        return view('form', ['param' => $param]);
    }

    function store(Request $request)
    {
        $post = Post::saveData(['title' => $request->all()['title'], 'text' => $request->all()['text']]);
        return view('index', ['data' => $post]);
    }
}
