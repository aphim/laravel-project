<?php

namespace App;
use Carbon\Carbon;

class Post extends Model
{
    //protected $fillable = ['title', 'body'];
    //protected $guarded = [];

public function comments()
{
    return $this->hasMany(Comment::class);
    //return $this->hasMany('\App\Comment');
}

public function user()
{
    return $this->belongsTo(User::class);

}

public function addComment($body)
{

    $this->comments()->create(compact('body'));

        //     Comment::create([

        //     'body' => request('body'),

        //     'post_id' => $this->id
        // ]);
}
public function scopeFilter($query, $filters)
{
            if ($month = filters['month']){
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = filters['year']){
            $posts->whereYear('created_at', $year);
        }

}


}
