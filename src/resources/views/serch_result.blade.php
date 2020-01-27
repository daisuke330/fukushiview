{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '会員登録')
@section('button2')
<img src='login.png' alt='login' class='absolute2'>
@endsection
@section('content')