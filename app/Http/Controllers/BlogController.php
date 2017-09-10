<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store()
    {
        /*$blog = new Blog;
        $blog->title = request('title');
        $blog->body = request('body');
        $blog->save();*/

        Blog::created(request(['title', 'body']));

        return redirect('/blogs');
    }
}
