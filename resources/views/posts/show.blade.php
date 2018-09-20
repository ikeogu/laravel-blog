@extends('layouts.blog')

@section('content')
    <div class="col-sm-8 blog-main">

      <h2>{{ $post->title}}</h2>

      {{ $post->body }}

    </div><!-- /.blog-main -->
@endsection
