<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;


class PostsController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->except(['index', 'show']);
    }


    public function index()
    {

        return session('message');
        
        //$posts = \App\Post::all();
        $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();


        // $posts = Post::latest();

        // if ($month = request('month')){
        //     $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // }

        // if ($year = request('year')){
        //     $posts->whereYear('created_at', $year);
        // }

        // $posts = $posts->get();
        
        $archives = Post::archives();

        //$posts = \App\Post::orderBy('created_at', 'desc')->get();

        //return $archives;

        return view('posts.index', compact('posts'));

    }

    // public function index(Posts $posts)
    // {
    //     //$posts = \App\Post::all();
    //     // $posts = Post::latest()
    //     // ->filter(request(['month', 'year']))
    //     // ->get();

    //     dd($posts);
    //     $posts = $posts->all();

    //     // $posts = Post::latest();

    //     // if ($month = request('month')){
    //     //     $posts->whereMonth('created_at', Carbon::parse($month)->month);
    //     // }

    //     // if ($year = request('year')){
    //     //     $posts->whereYear('created_at', $year);
    //     // }

    //     // $posts = $posts->get();
        
    //     //$archives = Post::archives();

    //     //$posts = \App\Post::orderBy('created_at', 'desc')->get();

    //     //return $archives;

    //     return view('posts.index', compact('posts'));

    // }


    public function show(Post $post)
    {

        //$post = Post::find($id);

        return view('posts.show', compact('post'));

    }

    public function create()
    {
        return view('posts.create');

    }

    public function store()
    {

        //dd(request(['title', 'body']));

        //$post = new Post;

        // $post->title = request('title');

        // $post->body = request('body');

        // $post->save();

        // Post::create([

        //     'title' => request('title'),
        //     'body' => request('body')

        // ]);


        $this->validate(request(), [

            'title' => 'required',
            'body' => 'required'    

        ]);

        auth()->user()->publish(

            new Post(request(['title', 'body']
        )));

        // Post::create([
            
        //     'title' => request('title'), 
        //     'body'=> request('body'), 
        //     'user_id' => auth()->id()
        
        // ]);

        return redirect('/');


    }

}
