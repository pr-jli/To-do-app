@extends('layout')
@section('content')
<h1> TO-DO-APP</h1>

<a href="/tasks/create" class="btn btn-primary">Create Tasks</a>
<h1> CURRENT TASKS</h1>
<p>Click tasks to edit/delete</p>
<div class="task-contents">

    <ul>

        @foreach($task as $task)

        <li>
            <a href="/tasks/{{ $task-> id }}"> {{ $task->task }} </a>


        </li>

        @endforeach

    </ul>
</div>
@endsection