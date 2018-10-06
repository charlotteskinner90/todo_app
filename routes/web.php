<?php

// Route for main tasks page
Route::get('/', function () {
    return view('tasks');
});
// Route for current tasks
Route::get('current_tasks', 'TaskController@index');
// Route for archived tasks
Route::get('archived_tasks', 'TaskController@archived');
// Route to post created tasks
Route::post('create_task', 'TaskController@create');
// Route to delete a task entirely, specified by task id (task table)
Route::post('delete_task/{id}', 'TaskController@delete');
// Route for archiving a task, specified by task id (task table)
Route::post('archive_task/{id}', 'TaskController@archive');
// Edit existing task
Route::post('edit_task', 'TaskController@edit');