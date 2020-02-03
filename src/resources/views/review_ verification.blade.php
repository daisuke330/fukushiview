{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')
{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '確認画面')
@section('button1')
<a href='/members'><img src='ikaiintoroku.png' alt='signin' class='absolute1'></a>
@endsection
@section('button2')
<img src='ilogin.png' alt='login' class='absolute2'>
@endsection
@section('content')

あ
@endsection