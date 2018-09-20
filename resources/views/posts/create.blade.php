@extends('layouts.blog')

@section('content')
<div class="col-sm-8 blog-main">

    <h2>Create a Post</h2>

    <hr>

    <form method="POST" action="/posts">
        @csrf

        <div class="form-group">
            <label for="title">Title:</label>
            <input id="title" type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" id="body" rows="6" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div><!-- /.blog-main -->
@endsection
