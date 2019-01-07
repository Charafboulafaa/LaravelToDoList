@extends('layouts.app')

@section('content')
    <a class="btn btn-dark" href="/">Go Back</a>
    <h1>{{$todo->text}}</h1>
    <hr>
    <div class="badge badge-info">{{$todo->due}}</div>
    <p>{{$todo->body}}</p>
    <br><br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-warning">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'DELETE']) !!}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection