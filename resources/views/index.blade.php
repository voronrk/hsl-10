@extends('templates.layout')

@section('page')
    @php
        echo "<pre>";
        echo print_r($data,true);
        echo "</pre>";
    @endphp
@endsection
