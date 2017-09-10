@extends('layouts.blog')
@section('blogposts')
    @foreach($blogs as $blog)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $blog->title }}</h2>
            <p class="blog-post-meta">
                {{$blog->created_at}}
            </p>
            <p>
                {{$blog->body}}
            </p>
        </div>
    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@endsection