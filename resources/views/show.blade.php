@extends('layout')
@section('content')

<div class="task" style=" margin: 25px 50px 75px 100px;">
<h1>{{$task->task}}</h1>

<p>
    <h1><a class="btn btn-primary" href="/tasks/ {{ $task->id}}/edit">Edit</a></h1>
</p>
</div>
@endsection