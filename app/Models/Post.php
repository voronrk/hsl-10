<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Barryvdh\Debugbar\Facades\Debugbar;

class Post extends Model
{
    use HasFactory;

    static function saveData($data)
    {
        $post = new Post();
        $post->title = $data['title'];
        $post->text = $data['text'];
        try {
            $post->save();
            return $post;
        } catch (QueryException $e) {
            Debugbar::addThrowable($e);
            return $e;
        }        
    }
}
