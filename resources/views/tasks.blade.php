@extends('layout')
@section('content')
<form action="{{url('/tasks')}}" method="POST">
    {{ csrf_field()}}
    <div class="form-contents">
        <label>TASK</label>
        <input type="text " name="task" id="task-name">
    </div>
    <div class="form-contents">
        <button type="submit">add task</button>
    </div>
</form>

<h1> TO-DO-LIST</h1>
<div class="task-contents">
    <table>

        @foreach($tasks as $task)
        <tr>
            <td>
                {{ $task->task }}
                <form method="delete" action="/tasks/{{ $task->id }}">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </div>
                        
                </form>
                <a href=#>Update</a>
            </td>
        </tr>
        @endforeach

    </table>
</div>

@endsection