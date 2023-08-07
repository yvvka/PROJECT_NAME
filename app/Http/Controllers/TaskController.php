<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\Task;
use App\Http\Requests\CreateTask;
use App\Http\Requests\EditTask ;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(int $id)
{
    $folders = Folder::all();
    $current_folder = Folder::find($id);
    $tasks = $current_folder->tasks()->get(); 
    return view('tasks/index', [
        'folders' => $folders,
        'current_folder_id' => $current_folder->id,
        'tasks' => $tasks,
    ]);
}
public function showCreateForm(int $id)
{
    return view('tasks/create', [
        'folder_id' => $id
    ]);
}
public function create(int $id, CreateTask $request)
{
    $current_folder = Folder::find($id);

    $task = new Task();
    $task->title = $request->title;
    $task->due_date = $request->due_date;

    $current_folder->tasks()->save($task);

    return redirect()->route('tasks.index', [
        'id' => $current_folder->id,
    ]);
}
public function showEditForm(int $id, int $task_id)
{
    $current_folder = Folder::find($id);
    $task = Task::find($task_id);

    return view('tasks/edit', [
        'task' => $task,
        'id' => $current_folder->id,
    ]);
}
public function edit(int $id, int $task_id, EditTask $request)
{
    $current_folder = Folder::find($id);
    // 1
    $task = Task::find($task_id);

    // 2
    $task->title = $request->title;
    $task->status = $request->status;
    $task->due_date = $request->due_date;
    $task->save();

    // 3
    return redirect()->route('tasks.index', [
        'id' => $task->folder_id,
        'id' => $current_folder->id,
    ]);
}
}
