@extends('layouts.default')

@section('title', 'Task')

@section('content')

  <h1></h1>
  <p><a href="/posts/create">MYタスク新規登録</a></p>   
        <table border ="1" align ="center">       
  <tr>
    <th>NO</th><th>task</th><th>詳細</th><th>ステータス変更</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
    <td>{{ $post->id}}</td>
    <td>{{ $post->title }}</td>
    <td>{{ $post->body }}</td>
    <td><a href="{{ action('PostsController@edit', $post) }}" class="edit">[更新]</a>
    <a href="#" class="del" data-id="{{ $post->id }}">[削除]</a></td>
    </tr>
     <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
    {{ csrf_field() }}
   {{ method_field('delete') }}
   </form>
    <script src="/js/main.js"></script>
    @endforeach
   </table>
  {{ $posts->links() }}
@endsection