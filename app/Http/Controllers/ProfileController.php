<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Storage;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('layouts.profile');
    }
    public function edit()
    {
        $skills = Skill::all();
        return view('layouts.edit-profile', compact('skills'));
    }
    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->url = $request->url;
        $user->place_title = $request->place_title;
        $user->title = $request->title;
        $user->place_link = $request->place_link;
        $user->description = $request->description;


        if ($request->hasFile('avatar')) {
            if ($user->avatar && Storage::exists($user->avatar)) {
                Storage::delete($user->avatar);
            }
            $user->avatar = $request->file('avatar')->store('uploads', 'public');
        }
        $user->save();
        return redirect(route('profile.index'))->with('success', 'Profile updated');
    }
}
