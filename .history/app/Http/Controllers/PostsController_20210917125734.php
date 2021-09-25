<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));

    }

    public function show(Post $post)
    {

        $post = Post::find($post);

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

        Post::create(request(['title', 'body']));

        return redirect('/');


    }

}
