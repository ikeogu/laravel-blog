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
    $tasks = array(
        'Go to the store',
        'Finish my screencast',
        'Clean the house'
    );

    return view('tasks')->with(['tasks' => $tasks]);
});