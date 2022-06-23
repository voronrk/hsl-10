@extends('templates.layout')

@section('page')
<form class="form" method="POST" action="/profile">
    @csrf
    <div class="field">
        <label class="label">Имя</label>
        <div class="control">
          <input class="input" type="text" name="name" placeholder="Введите имя">
          @if($param == 'noname') 
            <p class="help is-danger">Не задано имя!</p>
          @endif
        </div>
    </div>

    <div class="field">
        <label class="label">E-mail</label>
        <div class="control">
          <input class="input" type="email" name="email" placeholder="Введите e-mail">
        </div>
    </div>

    <div class="field">
        <div class="control">
          <button type="submit" class="button is-link">Отправить</button>
        </div>
    </div>

    </form>

@endsection
