@extends('templates.layout')

@section('page')
    @php
        echo "<pre>";
        echo print_r($data,true);
        echo "</pre>";
    @endphp
    {{-- @foreach($data as $item)
        {{ $item}}<br>
    @endforeach --}}
@endsection
