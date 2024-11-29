<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Skill;
use Illuminate\Http\Request;
use Storage;

class PostController extends Controller
{
    public function createPost()
    {
        $skills = Skill::all();
        return view('layouts.create-post', compact('skills'));
    }
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->user_id = auth()->user()->id;
        $post->description = $request->description;
        $post->link = $request->link;
        
        if ($request->hasFile('image')) {
            if ($post->image && Storage::exists($post->image)) {
                Storage::delete($post->image);
            }
            $post->image = $request->file('image')->store('uploads', 'public');
        }
        $post->save();
        if ($request->has('skills')) {
            $post->skills()->sync($request->skills);
        }
        return redirect(route('profile.index',auth()->user()->username))->with('success', 'Post Created Successfully');
    }

}
