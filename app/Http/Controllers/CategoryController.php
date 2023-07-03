<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
public function getPosts($id)
{
    $category = Category::findOrFail($id);
    $posts = $category->posts;

    return view('category_posts', compact('category', 'posts'));
}


public function getLatestPost(){
    $category = Category::find(1);
    $latestPost = $category->latestPost;
    return view('latest_posts', compact('categories'));
}
}
