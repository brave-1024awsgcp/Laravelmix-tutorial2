@extends('layouts.default')

@section('title', 'Blog')

@section('content')
<h1>
  <a href="{{ url('/posts/create') }}" class="header-menu">新規投稿</a>
  MyBlog
</h1>
<ul>
  @forelse ($posts as $post)
  <p>
    <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>
    <a href="{{ action('PostsController@edit', $post) }}" class="edit">[編集]</a>
    <a href="#" class="del" data-id="{{ $post->id }}">[x]</a>
    <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
  </p>
  @empty
  <p>No posts yet</p>
  @endforelse
</ul>
<script src="/js/main.js"></script>
@endsection