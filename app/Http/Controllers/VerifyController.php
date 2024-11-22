<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function index()
    {
        $files = File::latest()->paginate(10);
        return view('admin.pages.verify', compact('files'));
    }
    public function varifyUser(Request $request, User $user)
    {
        $user->is_varified = $request->is_varified;
        $user->save();
        return redirect()->back()->with('success', 'user is verifition Updated');
    }
}
