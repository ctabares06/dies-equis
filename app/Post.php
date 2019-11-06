<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\User;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title','content','user_id','created_at','updated_at'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
