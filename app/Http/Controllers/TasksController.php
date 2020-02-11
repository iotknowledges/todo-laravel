<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'ASC')->get();

        $date = [
            'tasks' => $tasks,
        ];

        return view('tasks.index', $date);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        Task::create($request->all());

        return redirect('/');
    }

    public function update(Task $task)
    {
        $task->done = true;
        $task->save();

        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/');
    }
}
