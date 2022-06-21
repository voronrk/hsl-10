@extends('templates.layout')

@section('page')
    @foreach($data as $item)
        {{ $item}}<br>
    @endforeach
@endsection
