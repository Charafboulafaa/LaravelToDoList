@extends('layouts.app')

@section('content')
    <a class="btn btn-light" href="/">Go Back</a>
    <h1>{{$todo->text}}</h1>
    <hr>
    <div class="badge badge-info">{{$todo->due}}</div>
    <p>{{$todo->body}}</p>
    <br><br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
@endsection