<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Database\QueryException;
use Barryvdh\Debugbar\Facades\Debugbar;

class PostController extends Controller
{
    function create(Request $request, $param = '')
    {
        return view('form', ['param' => $param, 'request' => $request]);
    }

    function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->all()['title'];
        $post->text = $request->all()['text'];
        try {
            $result = $post->save();
            if ($result == '1') {
                $data = 'Пост сохранён успешно';
            } else {
                $data = 'Ошибка сохранения поста';
            };
        } catch (QueryException $e) {
            $data = $e->getMessage();
        }
        return view('index', ['data' => $data]);
        
    }
}
