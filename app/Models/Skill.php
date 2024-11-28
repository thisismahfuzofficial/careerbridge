<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_skill')->withTimestamps();
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_skills')->withTimestamps();
    }
    
}
