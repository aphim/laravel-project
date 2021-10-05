<?php

namespace App\Repositories;

use App\Post;
use App\Redis;

class Post
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