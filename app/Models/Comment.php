<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\CommentFactory;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function post (){

        return $this->belongsTo(Post::class);

    }

    


}
