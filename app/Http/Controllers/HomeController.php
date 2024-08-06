<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        return view('index', compact('blogs'));
    }

    public function showBlogs()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('blogs', compact('blogs'));
    }

    public function showBlogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog-details', [
            'blog' => $blog,
            'metaTitle' => $blog->title,
            'metaDescription' => $blog->meta_description,
        ]);
    }

}
