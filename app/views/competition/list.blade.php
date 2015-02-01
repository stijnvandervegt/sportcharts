@extends('layouts.default')
@section('content')
    @foreach($competitions as $competition)
        <li>{{$competition->name}}</li>
    @endforeach
@stop


