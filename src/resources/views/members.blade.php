{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', 'メンバー登録')
@section('button2')
<img src='login.png' alt='login' class='absolute2'>
@endsection
@section('content')
<div class="panel-body">
    <!-- バリデーションエラーの表⽰に使⽤するエラーファイル-->
    @include('common.errors')
    <!-- メンバー登録フォーム -->
    <form action="{{ route('members.store') }}" method="POST" class="formhorizontal">
        @csrf
        <div class="form-group">
            <!-- 登録項目 -->
            <div class="col-sm-6">
                <div>
                    <label for="nickname" class="col-sm-3 control-label">ニックネーム（必須）</label>
                    <input type="text" name="nickname" id="nickname" class="form-control">
                </div>
                <div>
                    <label for="email" class="col-sm-3 control-label">メールアドレス（必須）</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div>
                    <label for="last_name" class="col-sm-3 control-label">姓（任意）</label>
                    <input type="text" name="last_name" id="last_name" class="form-control">
                </div>
                <div>
                    <label for="first_name" class="col-sm-3 control-label">名（任意）</label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
                <div>
                    <label for="gender_code" class="col-sm-3 control-label">性別（必須）</label>
                    <input type="radio" name="gender_code" id="gender_code" value='1' class="form-control">男性　
                    <input type="radio" name="gender_code" id="gender_code" value='2' class="form-control">女性　
                </div>
                <div>
                    <label for="age_code" class="col-sm-3 control-label">年代（必須）</label>
                    <input type="radio" name="age_code" id="age_code" value='1' class="form-control">１０代　
                    <input type="radio" name="age_code" id="age_code" value='2' class="form-control">２０代　
                    <input type="radio" name="age_code" id="age_code" value='3' class="form-control">３０代　
                    <input type="radio" name="age_code" id="age_code" value='4' class="form-control">４０代　
                    <input type="radio" name="age_code" id="age_code" value='5' class="form-control">５０代　
                    <input type="radio" name="age_code" id="age_code" value='6' class="form-control">６０代　
                    <input type="radio" name="age_code" id="age_code" value='7' class="form-control">７０代　
                </div>
                <div>
                    <label for="password" class="col-sm-3 control-label">パスワード（必須）</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div>
                    <label for="password2" class="col-sm-3 control-label">パスワード（もう一度）</label>
                    <input type="password" name="password2" id="password2" class="form-control">
                </div>

            </div>
        </div>
        <!-- メンバー登録ボタン -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection