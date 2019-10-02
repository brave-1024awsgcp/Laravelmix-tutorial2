@extends('layouts.default')

@section('content')
 <h1>
  <a href="{{ url('/posts/create') }}" class="header-menu">新規投稿</a>
  Tasklist
 </h1>
 <ul>
  @forelse ($posts as $post)
 <p>
    <a href="{{ action('PostsController@show', $post) }}">{{ $post->id }}番目の投稿</a>
    <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}予定</a>
    <a href="{{ action('PostsController@edit', $post) }}" class="edit">[更新]</a>
    <a href="#" class="del" data-id="{{ $post->id }}">[削除]</a>
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
 <p> {{ $posts->links() }}</p>
@endsection