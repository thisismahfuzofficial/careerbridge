<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function profile()
    {
        $skills = Skill::all();
        return view('layouts.profile',compact('skills'));
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

        return redirect(route('profile.index'))->with('success', 'Profile updated');
    }
    public function fileUpload(Request $request)
    {
        $verify = new File;
        if ($request->hasFile('verify')) {
            $verify->file = $request->file('verify')->store('verified', 'public');
        }
        $verify->user_id = auth()->user()->id;
        $verify->save();
        return redirect(route('profile.index'))->with('success', 'Request to be verified has sent');

    }

}
