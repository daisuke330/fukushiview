{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '口コミ投稿')
@section('button1')
<a href='/members'><img src="{{asset('kaiintoroku.png')}}" alt='signin' class='absolute1'></a>
@endsection
@section('button2')
<img src="{{asset('login.png')}}" alt='login' class='absolute2'>
@endsection

@section('content')
<div class='content'>
    <h2>{{$office->office_name}}</h2>

    <div>
        住所：〒{{$office->address}}<br>
        電話番号：{{$office->phone_number}}<br>
        FAX番号：{{$office->fax_number}}<br>
        email：{{$office->email}}<br>
        ホームページ：{{$office->url}}
    </div>
    <div class='sform'>
        <h1>口コミ投稿</h1>
    </div>
    <div class=" panel-body">
        <!-- バリデーションエラーの表⽰に使⽤するエラーファイル-->
        @include('common.errors')
        <!-- 口コミ登録フォーム -->
        <form action="{{ route('insertreviews.store',['office_id'=>$office->id] )}}" method="POST" class="formhorizontal">
            @csrf
            <div class="form-group">
                <!-- 登録項目 -->
                <div class='content'>
                    <div class="content2">
                        <div class='content'>
                            <label for="strong_point" class="col-sm-3 control-label"></label>
                            <img src="{{asset('strong.png')}}" alt='strong' class='img'>
                            <br>
                            <textarea name="strong_point" id="strong_point" class="textarea"></textarea>
                        </div>
                        <div class='space2'></div>
                        <div class='content'>
                            <label for="weak_point" class="col-sm-3 control-label"></label>
                            <img src="{{asset('weak.png')}}" alt='weak' class='img'>
                            <br>
                            <textarea name="weak_point" id="weak_point" class="textarea"></textarea>
                        </div>
                    </div>
                    <div>
                        <ul>
                            <li>50文字以上250文字以内でご記入ください。</li>
                            <li>誹謗・中傷・個人が特定できる内容の書き込みはご遠慮ください。</li>
                        </ul>
                    </div>


                </div>

                <!-- 口コミ登録ボタン -->
                <div class='sform'>
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="button" style="cursor:pointer">投稿</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @endsection