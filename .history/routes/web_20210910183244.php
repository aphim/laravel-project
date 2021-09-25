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

// Route::get('/', function () {
//     return view('welcome', [
//         'name' => 'World'
//     ]);
// });

// Route::get('/', function () {
//     return view('welcome') ->with('name', 'World');
// });

Route::get('/', function () {

    $name = 'Jacky';
    $age = 25;
// $tasks = [
//     'Go to the store',
//     'Finish my screencast',
//     'Clean the house'
// ];
    $tasks = DB::table('tasks')->get();

    // return view('welcome', [
    //     'name' => $name
    // ]);
    //return view('welcome', compact('name', 'age'));
    
    return view('welcome', compact('tasks'));
});

Route::get('/tasks', function ($id) {

    DD($id);    
    $tasks = DB::table('tasks')->latest()->get();
    
    return view('welcome', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
     
    $task = DB::table('tasks')->find($id);
    
    return view('tasks.show', compact('tasks'));

});

Route::get('/about', function(){
    return view('about');
});

