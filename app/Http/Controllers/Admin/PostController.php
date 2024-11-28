<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(20);
        return view('admin.post.all-posts', compact('posts'));
    }
    public function destroy(string $id)
    {
        $data = Post::findOrFail($id);
        if ($data->image && Storage::exists($data->image)) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect(route('admin.posts.index'))->with('success', 'Post Deleted successfully');
    }
}
