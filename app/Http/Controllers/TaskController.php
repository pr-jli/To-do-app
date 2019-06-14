<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index(){
        $task = new Task();
        $tasks = Task::select('task')->orderBy("id", "desc")->get();
        
        return view("tasks", compact("tasks"));
        }
    public function store(Request $request)
    {
        $input = $request->all();
        $task = new Task();
        $task->task = request("task");
        $task->save();
        //$message="added successfully!";
        return redirect('/tasks')->with('message', ' saved!');

    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks')->with('message', ' deleted!');
    } //
}
