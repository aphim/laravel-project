<?php

namespace App\Repositories;

use App\Post;

class Posts
{
    protected $redis;

    public function __construction(Redis $redis)
    {
        $this->redis = $redis;
    }

    public function all()
    {
        return Post::all();
    }



}