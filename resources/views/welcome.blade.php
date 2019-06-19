@extends('layout')
@section('content')
<div class="welcome-contents" style=" margin: 25px 50px 75px 100px;">
<h1>MY TO-DO-APP</h1>
<div class="task-contents" style=" margin-top: 45px ;">
    <a href='/tasks' class=" btn btn-primary">Current tasks</a>
    <a href='/create' class="btn btn-primary"> create task</a>
</div>
@endsection