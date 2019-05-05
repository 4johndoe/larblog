<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(2);
        $categories = Category::all();

        return view('pages.index', compact('posts', 'categories'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('pages.show', compact('post'));
    }

    public function tag($slug)
    {
        $categories = Category::all();
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->paginate(2);

        return view('pages.list', compact('posts', 'categories'));
    }

    public function category($slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->paginate(2);

        return view('pages.list', compact('posts', 'categories'));
    }
}
