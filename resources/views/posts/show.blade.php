@extends('layouts.blog')

@section('content')
    <div class="col-sm-8 blog-main">

      <h2>{{ $post->title}}</h2>

      {{ $post->body }}

      <hr>

      @if (count($post->comments))
          <div class="comments">
              <ul class="list-group">
                  @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>
                        {{ $comment->body }}
                    </li>
                  @endforeach
              </ul>
          </div>
      @endif

    </div><!-- /.blog-main -->
@endsection
