<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Post;
use app\User;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['content','user_id','post_id','created_at','updated_at'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Post()
    {
        return $this->belongsTo(Post::class);
    }
}
