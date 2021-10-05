<?php

namespace App;

use App\Repositories\Posts;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    
    public function posts()
{

    return $this->belongsToMany(Post::class);

}
}
