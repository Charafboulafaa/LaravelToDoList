@extends('layouts.app')

@section('content')
  <h1>Edit Todo</h1>
  <a href="/todo/{{$todo->id}}" class="btn btn-dark">Back</a>
  {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'PUT']) !!}
    {{ Form::bsText('text', $todo->text) }}
    {{ Form::bsTextArea('body', $todo->body) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-success']) }}
  {!! Form::close() !!}
@endsection