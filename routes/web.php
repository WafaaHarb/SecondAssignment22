<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('about');
});

//This is first way of send key
Route::get('/', function () {
    $name = 'Wafaa';
    return view('about',['name' => $name]);
});

//This is second way of send key value
Route::get('/', function () {
    $name = 'Wafaa';
    return view('about') -> with ('name', $name);
});

//This is third way of send key
Route::get('/', function () {
    $name = 'Wafaa';
    return view('about',compact('name'));
});

*/


Route::get('about', function () {
    $name = request('name');
    return view('about', compact('name'));
});

Route::post('about', function () {
    if (isset($_GET['name']))
    $name = $_GET['name'];
    return view('send',compact('name'));
});

Route::get('tasks', function () {
    $tasks = [
        'Home',
        'Services',
        'Contact Us'

    ];

    return view('tasks', compact('tasks'));
});

Route::get('show/{id}', function ($id) {
    $tasks = [
        'first-task' => 'Home',
        'second-task' => 'Services',
        'third-task' => 'Contact Us'

    ];

    $task = $tasks[$id];
    return view('show', compact('task'));
});


Route::get('about', [TaskController::class, 'show_name']);
Route::get('about', [TaskController::class, 'send_name']);
Route::get('contact', [TaskController::class, 'index']);
Route::get('contact/{id}', [TaskController::class, 'index']);


