@extends('layouts.app')

@section('content')
    <h1>To Do List</h1>
    @if(count($todos)>0)
        @foreach($todos as $todo)
        <div class="card card-body bg-light">
            <h3>{{$todo->text}}</h3>
            <span class="badge badge-info">{{$todo->due}}</span>
        </div>
        @endforeach
    @endif
    
@endsection