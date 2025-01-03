<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Post;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function profile($username)
    {
        $user = User::where('username', $username)->first();
        
        $skills = Skill::all();
        $posts = Post::where('user_id', $user->id)->latest()->get();
        return view('layouts.profile',compact('skills','posts','user'));
    }
   
    public function edit()
    {
        $skills = Skill::all();
        $userExists = File::where('user_id', auth()->user()->id)->exists();

        
        return view('layouts.edit-profile', compact('skills', 'userExists'));
    }
    public function update(Request $request)
    {
        $user = auth()->user();


        $user->name = $request->name;
        $user->username = Str::slug($request->name);
        $user->url = $request->url;
        $user->place_title = $request->place_title;
        $user->title = $request->title;
        $user->place_link = $request->place_link;
        $user->description = $request->description;


        if ($request->has('skills')) {
            $user->skills()->sync($request->skills);
        }


        if ($request->hasFile('avatar')) {
            if ($user->avatar && Storage::exists($user->avatar)) {
                Storage::delete($user->avatar);
            }
            $user->avatar = $request->file('avatar')->store('uploads', 'public');
        }
        $user->save();

        return redirect(route('profile.index',auth()->user()->username))->with('success', 'Profile updated');
    }
    public function fileUpload(Request $request)
    {
        $verify = new File;
        if ($request->hasFile('verify')) {
            $verify->file = $request->file('verify')->store('verified', 'public');
        }
        $verify->user_id = auth()->user()->id;
        $verify->save();
        return redirect(route('profile.index',auth()->user()->username))->with('success', 'Request to be verified has sent');

    }

}
