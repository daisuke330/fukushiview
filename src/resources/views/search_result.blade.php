{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '検索結果')
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
                <form action="{{ route('officeinfo.index',$office->id) }}" method="GET">
                    <!-- @csrf -->
                    <button type="submit" class="btn btn-danger">詳細</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
    <div class='content2'>
        {{ $offices->links() }}
    </div>
</div>




@endsection