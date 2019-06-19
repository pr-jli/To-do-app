<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{

    public function index()
    {
        
        $task = Task::all();


        return view("/index", compact("task"));
    }
    public function store()
    {
        //using wrap model binding
        /* $task= new Task();
        $task->task = request('task');
        $task->save();
        return redirect('/tasks');*/
        //validation
        Task::create(request()->validate([
            'task'=> 'required|min:4|max:255']
        ));
        return redirect('/tasks');
    }
    public function create()
    {
        return view('/create');
    }

    public function destroy(Task $task)
    {
        //using wrap model binding
        //$task = Task::findOrFail($id)->delete();
        $task->delete();
        return redirect('/tasks');
    }
    public function update(Task $task)
    {
        //using wrap model binding
        /*$task = Task::findOrFail($id);
        $task->task = request('task');
        $task->save();
        return redirect('/tasks');*/
        $task->update(request()->validate([
            'task'=> 'required|min:4|max:255']
        ));
        return redirect('/tasks');
    }
    public function edit(Task $task)
    {
        //using wrap model binding
        //$task = Task::findOrFail($id);

        // return view('/edit');
        return view('/edit', compact('task'));
    }
    public function show(Task $task)
    {
        //using wrap model binding
        //$task = Task::findOrFail($id);
        return view('/show', compact('task'));
    }
}
