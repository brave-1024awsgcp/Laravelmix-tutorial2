@extends('layouts.default')

@section('title', 'Task')

@section('content')

<h1>
  <a href="{{ url('/') }}" class="header-menu">戻る</a>
</h1>
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
  {{Form::select('category', [ 'AWS' => 'AWS',  'Laravel' => 'Laravel', 'Springboot' => 'Springboot', 'GCP' => 'GCP', ])}}
  </p>
  <p>
    {{Form::select('title', [ 'コーディング' => 'コーディング',  '構築' => '構築', '設計' => '設計', '申し込み' => '申し込み', ])}}  </p>
  <p>
    {{Form::select('body', [ '完了' => '完了' ,'8割完了' => '8割完了',  '5割完了' => '5割完了', '未着手' => '未着手' ])}}  </p>
  </p>
  <p>
    <input type="submit" value="追加">
  </p>
</form>
<script src="/js/main.js"></script>

@endsection
