@extends('layout')
@section('content')

<h1>CREATE NEW TASK</h1>
<form action='/tasks' method="POST" >
    {{ csrf_field()}}
    <div class="form-contents">
        <label> NEW TASK</label>
        <br>
        <textarea class="input{{ $errors->has('task')? 'alert alert-danger':''}}" type="text " name="task"  required rows="5" cols="30"></textarea>
    </div>
    <br>
    <div class="form-contents">
        <button class='btn btn-primary' type="submit">Add task</button>
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
@endif

@endsection