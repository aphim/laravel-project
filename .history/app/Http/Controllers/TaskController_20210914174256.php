<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
public function index()
{

    $tasks = App\Task::all();
    
    return view('tasks.index', compact('tasks'));

}

}
