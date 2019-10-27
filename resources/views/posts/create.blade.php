@extends('layouts.default')

@section('title', 'Task')

@section('content')

<h1>
  <a href="{{ url('/') }}" class="header-menu">戻る</a>
</h1>
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
  {{Form::select('category', [ 'ポートフォリオ' => 'ポートフォリオ', 'AWS' => 'AWS',  'Laravel' => 'Laravel', 'Springboot' => 'Springboot', 'Azure' => 'Azure', 'Conoha' => 'Conoha', ])}}
  </p>
  <p>
    {{Form::select('title', [ 'デプロイ' => 'デプロイ', 'コーディング' => 'コーディング',  '環境構築' => '環境構築', '改修' => '改修', '申し込み' => '申し込み', ])}}  </p>
  <p>
    {{Form::select('body', [ '完了' => '完了' ,'8割完了' => '8割完了',  '5割完了' => '5割完了', '中断' => '中断' ])}}  </p>
  </p>
  <p>
    <input type="submit" value="追加">
  </p>
</form>
<script src="/js/main.js"></script>

@endsection
