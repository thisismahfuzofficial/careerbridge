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
    public function scopeSearch($query, $search)
    {
        return $query->where('title', 'like', "%{$search}%")
            ->orWhere('description', 'like', "%{$search}%")
            ->orWhereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->orWhereHas('user', function ($query) use ($search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->orWhereHas('skills', function ($query) use ($search) {
                $query->where('name', $search);
            });
    }
    public function scopeFilter($query, $filter)
    {
        return $query->WhereHas('skills', function ($query) use ($filter) {
            $query->where('name', $filter);
        });
    }
}
