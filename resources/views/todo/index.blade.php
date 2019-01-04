@extends('layouts.app')

@section('content')
    <h1>Todos</h1>
    <hr />
    @if(count($todos)>0)
        @foreach($todos as $todo)
        <div class="card card-body bg-light">
            <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h3>
            <div class="badge badge-info">{{$todo->due}}</div>
        </div>
        @endforeach
    @endif
    
@endsection