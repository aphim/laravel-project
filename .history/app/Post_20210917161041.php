<?php

namespace App;


class Post extends Model
{
    //protected $fillable = ['title', 'body'];
    //protected $guarded = [];

public function comments()
{
    return $this->hasMany(Comment::class);
}

public function addComment($body)
{

            Comment::create([

            'body' => request('body'),

            'post_id' => $this->id
        ]);
}

}
