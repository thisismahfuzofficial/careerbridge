<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::latest()->paginate(15);
        return view('admin.pages.skills', compact('skills'));
    }
    public function store(Request $request)
    {

        $skill = new Skill;
        $skill->name = $request->name;
        $skill->slug = Str::slug($request->name);
        $skill->save();
        return redirect(route('admin.skills'))->with('success', 'new Skill Add successfully');
    }
    public function update(Skill $skill, Request $request)
    {
        $skill->name = $request->name;
        $skill->slug = Str::slug($request->name);
        $skill->save();
        return redirect(route('admin.skills'))->with('success', 'Skill Updated successfully');
    }
    public function destroy(string $id)
    {
        $data = Skill::findOrFail($id);
        $data->delete();
        return redirect(route('admin.skills'))->with('success', 'Skill Deleted successfully');
    }
}

