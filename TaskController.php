<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TaskCreated;

use App\Task;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
        
    

    public function index()
    {
        
        $task = Task::where('owner_id',auth()->id())->get();


        return view("/index", compact("task"));
    }
    public function store(Request $request)
    {
        //using wrap model binding
        /* $task= new Task();
        $task->task = request('task');
        $task->save();
        return redirect('/tasks');*/
        //validation
        $attributes=request()->validate([
            'task'=> 'required|min:4|max:255',
            
            ]
        );
        $attributes['owner_id']=auth()->id();
        $task=Task::create($attributes);
        \Mail::to('pranjali.3898@gmail.com')->send(new TaskCreated($task));

        return redirect('/tasks');
    }
    public function create()
    {
        return view('/create');
    }

    public function destroy(Task $task)
    {
        $this->authorize('update',$task);

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
        $this->authorize('update',$task);

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
        //abort_unless(auth()->user()->owns($task),403);
       // auth()->user()->can('update',$task);
        $this->authorize('update',$task);
        return view('/show', compact('task'));
    }
}
