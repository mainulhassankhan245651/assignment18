<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function allposts()
    {
        $posts = Post::with('category')->get();

        return view('posts', compact('posts'));
    }

    public function destroy($id)
        {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('allposts.view')->with('success', 'Post deleted successfully.');
        }
}