{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')
{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '検索画面')
@section('button1')
<a href='/members'><img src='kaiintoroku.png' alt='signin' class='absolute1'></a>
@endsection
@section('button2')
<img src='login.png' alt='login' class='absolute2'>
@endsection
@section('content')

<div class='title_comment'>
    <h2>障がい福祉事業所の口コミを読む・書く</h2>
</div>
<div class='title_comment'>
    <h3>まずは事業所名・地域名などで検索↓</h3>
</div>
<div class='sform'>
    <!-- <form method="get" action="#" class="search_container">
            <input type="text" size="30" placeholder="　キーワード検索">
            <input type="submit" value="検索">
        </form> -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <form method="get" name='keyword' action="{{url('/search')}}" class="search_container">
        <input type="text" size="35" placeholder="キーワード検索">
        <input type="submit" value="&#xf002">
    </form>
</div>
@endsection