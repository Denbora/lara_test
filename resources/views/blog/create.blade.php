@extends('layouts.blog')
@section('blogposts')
    <div class="blog-post">
        <h2 class="blog-post-title">Create new post</h2>
        <hr>
        <form method="POST" action="/blogs">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title">
                <small id="titleHelp" class="form-text text-muted">Please enter the title of new post here</small>
            </div>

            <div class="form-group">
                <label for="body">Blog Text</label>
                <textarea class="form-control" id="body" rows="3" name="body"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>
        </form>

    </div>
@endsection