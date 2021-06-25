<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function saveData(Request $request)
    {
        $task = new task();

        $this->validate($request, [
            'task' => 'required|max:100|min:5',
        ]);

        $task->task = $request->task;
        $task->save();

        $$data = task::all();
        return view('task')->with('tasks', $data);
    }

    public function loadPage()
    {
        $data = task::all();
        return view('task')->with('tasks', $data);
    }
}
