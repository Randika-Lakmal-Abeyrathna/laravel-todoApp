<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function saveData(Request $request)
    {
        $task = new task();

        $task->task = $request->task;
        $task->save();

        return redirect()->back();
    }
}
