<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'post_skill')->withTimestamps();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
