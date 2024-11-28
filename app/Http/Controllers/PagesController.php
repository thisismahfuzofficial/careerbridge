<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::where('status','active')->latest()->get();
        $veterans = User::where('is_varified',1)->latest()->take(10)->get();

        return view('layouts.home',compact('posts','veterans'));
    }
    public function saved()
    {
        $posts = Post::where('status','active')->latest()->get();
        return view('layouts.saved',compact('posts'));
    }

   
}
