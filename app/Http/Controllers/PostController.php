<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost()
    {
        $skills = Skill::all();
        return view('layouts.create-post', compact('skills'));
    }
}
