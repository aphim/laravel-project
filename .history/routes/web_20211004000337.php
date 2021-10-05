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
//     return view('welcome');
//  });

//  Route::get('/about', function () {
//     return view('about');
//  });

// Route::get('/', function () {
//     return view('welcome', [
//         'name' => 'World'
//     ]);
// });

// Route::get('/', function () {
//     return view('welcome') ->with('name', 'World');
// });

// Route::get('/', function () {
//     //$name = 'Jacky';
//     $tasks = [
//      'Go to the store',
//      'Finish my screencast', 
//      'Clean the house'];
//     //Lesson 5, 3 ways to pass data to view 
//     //return view('welcome', ['tasks' => $tasks]);
//     return view('welcome', compact('tasks'));
//     //return view('welcome')->with('tasks', $tasks);
// }

// Route::get('/', function () {

//     $name = 'Jacky';
//     $age = 25;
// // $tasks = [
// //     'Go to the store',
// //     'Finish my screencast',
// //     'Clean the house'
// // ];
//     $tasks = DB::table('tasks')->get();

//     // return view('welcome', [
//     //     'name' => $name
//     // ]);
//     //return view('welcome', compact('name', 'age'));
    
//     return view('welcome', compact('tasks'));
// });

// Route::get('/tasks', function () {
  
//     $tasks = DB::table('tasks')->latest()->get();
    
//     return view('tasks.index', compact('tasks'));
// });

// Route::get('/tasks', function () {
//     $tasks = DB::table('tasks')->get();
//     $tasks = App\Task::all();
    
//     return view('tasks.index', compact('tasks'));

// });


// Route::get('/tasks/{task}', function ($id) {
     
//     $task = Task::find($id);
    
//     return view('tasks.show', compact('task'));

// });


// Route::get('/tasks/{task}', function ($id) {
     
//     $task = DB::table('tasks')->find($id);
    
//     return view('tasks.show', compact('task'));

// });

// Route::get('/about', function(){
//     return view('about');
// });

//Route::get('/tasks', 'TaskController@index');

//Route::get('/tasks/{task}', 'TaskController@show');

App::bind('App\Billing\Stripe', function (){

    return new \App\Billing\Stripe(config('services.stripe.secret'));
});

// $stripe = App::make('App\Billing\Stripe');
$stripe = resolve('App\Billing\Stripe');

dd($stripe);


Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
