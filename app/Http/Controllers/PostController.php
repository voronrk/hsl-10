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
        $post = new Post;
        $post->title = $request->all()['title'];
        $post->text = $request->all()['text'];
        $post->save();
        return view('index', ['data' => $post]);
    }
}
