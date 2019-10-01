@extends('layouts.default')

@section('title', 'New Post')

@section('content')
<h1>
  <a href="{{ url('/') }}" class="header-menu">戻る</a>
</h1>
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="title" placeholder="title">
    @if ($errors->has('title'))
    <span class="error">{{ $errors->first('title') }}</span>
    @endif
  </p>
  <p>
    <textarea name="category" placeholder="category"></textarea>
    @if ($errors->has('category'))
    <span class="error">{{ $errors->first('category') }}</span>
    @endif
  </p>
  <p>
    <textarea name="body" placeholder="body"></textarea>
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Add">
  </p>
</form>
@endsection