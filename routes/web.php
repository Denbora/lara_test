<?php

use App\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {

    $tasks = Task::all();

    return view('welcome', compact('tasks'));
});*/

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/posts', 'PostController@index');

Route::get('/blogs', 'BlogController@index');
Route::post('/blogs', 'BlogController@store');

Route::get('/blogs/create', 'BlogController@create');
Route::get('/blogs/{blog}', 'BlogController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
