{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '事業所詳細')
@section('button2')
<img src='login.png' alt='login' class='absolute2'>
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
        <form action="{{ route('insertreviews.index',['id'=>$office->id]) }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-danger">口コミを書く</button>
        </form>
    </div>
    @foreach ($reviews as $review)
    <li>
        ID:{{$review->member_id}}<br>
        <!-- {{optional($review->strong_point)->strong_point}} -->
        <div class='review_box'>
            <div class='review_box2'>{{ $review->strong_point }}</div>
            <div class='review_box2'>{{ $review->weak_point }}</div>
        </div>

    </li>
    @endforeach
</div>
@endsection