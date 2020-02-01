{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '会員登録')

@section('content')
<div class='sform'>
    <h1>口コミ投稿</h1>
</div>
<div class="panel-body">
    <!-- バリデーションエラーの表⽰に使⽤するエラーファイル-->
    @include('common.errors')
    <!-- メンバー登録フォーム -->
    <form action="{{ route('insertreviews.store') }}" method="POST" class="formhorizontal">
        @csrf
        <div class="form-group">
            <!-- 登録項目 -->
            <div class="col-sm-6">
                <div class='sform'>
                    <label for="strong_point" class="col-sm-3 control-label">良かった点</label>
                    <textarea name="strong_point" id="strong_point" class="form-control"></textarea>
                </div>
                <div class='sform'>
                    <label for="weak_point" class="col-sm-3 control-label">気になる点</label>
                    <textarea name="weak_point" id="weak_point" class="form-control"></textarea>
                </div>

            </div>
        </div>
        <!-- 口コミ登録ボタン -->
        <div class='sform'>
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-primary">投稿</button>
            </div>
        </div>
    </form>
</div>
@endsection