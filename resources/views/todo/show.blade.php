@extends('layouts.app')

@section('content')
    <a class="btn btn-light" href="/">Go Back</a>
    <h1>{{$todo->text}}</h1>
    <hr>
    <div class="badge badge-info">{{$todo->due}}</div>
    <p>{{$todo->body}}</p>
@endsection