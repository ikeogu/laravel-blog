<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $name = 'World';

    return view('welcome', compact('name'));
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/tasks', function() {
    $tasks = DB::table('tasks')->get();

    return view('tasks.index')->with(['tasks' => $tasks]);
});

Route::get('/tasks/{id}', function($id) {
    $task = DB::table('tasks')->find($id);

    return view('tasks.show')->with(['task' => $task]);
});
