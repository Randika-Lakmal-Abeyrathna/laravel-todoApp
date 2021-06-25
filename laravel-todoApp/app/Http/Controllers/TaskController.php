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

        $data = task::all();
        return redirect()->back();
        // return view('task')->with('tasks', $data);
    }

    public function loadPage()
    {
        $data = task::all();
        return view('task')->with('tasks', $data);
    }

    public function pending($id)
    {
        $task = task::find($id);
        $task->iscompleted = 0;
        $task->save();

        return redirect()->back();
    }

    public function complete($id)
    {
        $task = task::find($id);
        $task->iscompleted = 1;
        $task->save();

        return redirect()->back();
    }

    public function deleteTask($id)
    {
        $task = task::find($id);
        $task->delete();

        return redirect()->back();
    }
}
