{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '事業所詳細')
@section('button1')
<a href='/members'><img src="{{asset('kaiintoroku.png')}}" alt='signin' class='absolute1'></a>
@endsection
@section('button2')
<img src="{{asset('login.png')}}" alt='login' class='absolute2'>
@endsection
@section('content')
<div class='content'>
    <h1>{{$office->office_name}}</h1>
    <h2>
        {{$category_name->category_name}}
    </h2>
    <div>
        住所：〒{{$office->address}}<br>
        電話番号：{{$office->phone_number}}<br>
        FAX番号：{{$office->fax_number}}<br>
        email：{{$office->email}}<br>
        ホームページ：{{$office->url}}
    </div>
    <div>
        <form action=" {{ route('insertreviews.index',['id'=>$office->id]) }}" method="GET">
            @csrf
            <button type="submit" class="button" style="cursor:pointer">口コミを書く</button>
        </form>
    </div>
    <div class='space'>
    </div>
    <div class='review_box'>
        <img src="{{asset('strong.png')}}" alt='strong' class='img'>
        <div class='space2'></div>
        <img src="{{asset('weak.png')}}" alt='weak' class='img'>
    </div>
    @foreach ($reviews as $review)
    <li>
        ID:{{$review->member_id}}<br>
        <!-- {{optional($review->strong_point)->strong_point}} -->
        <div class='review_box'>
            <div class='review_box2'>{{ $review->strong_point }}</div>
            <div class='space3'></div>
            <div class='review_box2'>{{ $review->weak_point }}</div>
        </div>

    </li>
    @endforeach
</div>
@endsection