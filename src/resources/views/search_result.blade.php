{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '会員登録')
@section('button2')
<img src='login.png' alt='login' class='absolute2'>
@endsection
@section('content')

<ul>
    @foreach ($offices as $office)
    <li>{{ $office->office_name }}</li>
    <li>{{ $office->address }}</li>
    <form action="{{ route('officeinfo.index',$office->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">詳細</button>
        @endforeach
</ul>

@endsection