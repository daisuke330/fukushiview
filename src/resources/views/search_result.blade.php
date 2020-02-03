{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '検索結果')
@section('button1')
<a href='/members'><img src='kaiintoroku.png' alt='signin' class='absolute1'></a>
@endsection
@section('button2')
<img src='login.png' alt='login' class='absolute2'>
@endsection
@section('content')
<div class='content'>
    <h1>検索結果</h1>
    <h2>検索ワード：{{$keyword}}</h2>
    <div>
        <!-- リスト表示部分 -->
        <ul>
            @foreach ($offices as $office)
            <li>{{ $office->office_name }} 〒{{ $office->address }}
                <div class=''>
                    <form action="{{ route('officeinfo.index',['id'=>$office->id]) }}" method="GET">
                        <!-- @csrf -->
                        <button type="submit" class="button2" style="cursor:pointer">詳細を見る</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <div class='content2'>
        {{ $offices->links() }}
    </div>
</div>


@endsection