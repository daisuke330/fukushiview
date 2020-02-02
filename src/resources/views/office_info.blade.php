{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')
{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '事業所詳細')
@section('button1')
<a href='/members'><img src='kaiintoroku.png' alt='signin' class='absolute1'></a>
@endsection
@section('button2')
<img src='login.png' alt='login' class='absolute2'>
@endsection
@section('content')
<h1>{{$office->office_name}}</h1>
<div>
    {{}}
</div>
<div>
    住所：〒{{$office->address}}<br>
    電話番号：{{$office->phone_number}}<br>
    FAX番号：{{$office->fax_number}}<br>
    email：{{$office->email}}<br>
    ホームページ：{{$office->url}}
</div>


@endsection