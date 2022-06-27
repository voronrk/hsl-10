@extends('templates.layout')

@section('page')
<form class="form" method="POST" action="/store">
    @csrf
    <div class="field">
        <label class="label">Заголовок</label>
        <div class="control">
          <input class="input" type="text" name="title" placeholder="Введите название поста">
          @if($param == 'notunique') 
            <p class="help is-danger">Название должно быть уникальным!</p>
          @endif
        </div>
    </div>

    <div class="field">
        <label class="label">Текст поста</label>
        <div class="control">
          <textarea class="textarea" name="text" placeholder="Введите текст поста"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
          <button type="submit" class="button is-link">Отправить</button>
        </div>
    </div>

    </form>

@endsection
