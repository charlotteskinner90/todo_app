<?php

namespace App\Http\Controllers;

use App\Task; // References Model in Task.php file
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // Gets active (non-archived) tasks. Orders tasks by the primary key ID
        return Task::where('archive', 0)->orderBy('id', 'desc')->get();
    }

    public function archived()
    {
        // Gets archived tasks. Orders tasks by the primary key ID
        return Task::where('archive', 1)->orderBy('id', 'desc')->get();
    }

    public function create(Request $request)
    {
        // Validates content of task body - is a required field with max character limit of 500
        $this->validate($request, ['body'=> 'required|max:500']);
        // Once task body is validated, creates task and posts body of task.
        return Task::create(['body' => request('body')]);
    }

    public function edit(Request $request)
    {
        $this->validate($request, ['body' => 'required|max:500']);
        // Get the first result of the query, if no result is found throw an exception
        $task = Task::findOrFail($request->id);
        // Gets the body of the task
        $task->body = $request->body;
        // Saves the task
        $task->save();
    }

    public function archive()
    {
        // Get the id of the task
        $task = Task::findOrFail($id);
        //
        $task->archive = ! $task->archive;
        // Saves task as archived
        $task->save();
    }

    public function delete($id)
    {
        // Take the ID of the task or throw exception
        $task = Task::findOrFail($id);
        // Delete task
        $task->delete();
    }
}
