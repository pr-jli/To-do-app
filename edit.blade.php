@extends('layout')
@section('content')
<div class= page-contents style=" margin: 25px 50px 75px 100px;">
<h1>UPDATE NEW TASK</h1>
<br>
<form method="POST" action="/tasks/{{$task->id}}" style="margin-bottom:20px;" >
    @csrf
    @method('PATCH')
    <div class="form-contents">
        <label>CURRENT TASK</label>
        <br>
        <textarea class="input{{ $errors->has('task')? 'alert alert-danger':''}}" type="text " name="task" rows="5" cols="30"  value="{{ old('task')}}" required >{{ $task->task}}</textarea>
        
    </div>
    <br>
    <div class="form-contents">
        <button class="btn btn-primary" type="submit">update task</button>
    </div>


</form>
<form method="POST" action="/tasks/{{ $task->id }}">
    @csrf
    @method('DELETE')
    <div class="form-contents">
        <button class="btn btn-danger" type="submit">delete task</button>
    </div>
</form>
@if($errors->any())
<div class="alert alert-danger" style="margin-top:20px;">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
</div>
@endif
@endsection