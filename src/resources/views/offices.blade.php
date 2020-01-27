{{-- fukushiview.blade.phpを継承 --}}
@extends('fukushiview')

{{-- @yield('title')にテンプレートごとにtitleタグの値を代入 --}}
@section('title', '事業所登録')

@section('content')
<div class='sform'>
    <h1>事業所登録</h1>
</div>
<div class="panel-body">
    <!-- バリデーションエラーの表⽰に使⽤するエラーファイル-->
    @include('common.errors')
    <!-- 事業所登録フォーム -->
    <form action="{{ route('offices.store') }}" method="POST" class="formhorizontal">
        @csrf
        <div class="form-group">
            <!-- 登録項目 -->
            <div class="col-sm-6">
                <div class='sform'>
                    <label for="office_number" class="col-sm-3 control-label">事業所番号</label>
                    <input type="text" name="office_number" id="office_number" class="form-control">
                </div>
                <div class='sform'>
                    <label for="office_name" class="col-sm-3 control-label">事業所名（必須）</label>
                    <input type="text" name="office_name" id="office_name" class="form-control">
                </div>
                <div class='radio'>
                    <label for="category_id" class="col-sm-3 control-label">事業種（必須）</label>
                    <div>
                        <input type="radio" name="category_id" id="category_id" value='001' class="form-control">就労移行支援　
                        <input type="radio" name="category_id" id="category_id" value='002' class="form-control">就労継続支援A型　
                        <input type="radio" name="category_id" id="category_id" value='003' class="form-control">就労継続支援B型　
                        <input type="radio" name="category_id" id="category_id" value='004' class="form-control">共同生活援助（グループホーム）　
                    </div>
                    <div>
                        <input type="radio" name="category_id" id="category_id" value='005' class="form-control">居宅介護　
                        <input type="radio" name="category_id" id="category_id" value='006' class="form-control">生活介護　
                        <input type="radio" name="category_id" id="category_id" value='007' class="form-control">自立訓練（機能訓練）　
                        <input type="radio" name="category_id" id="category_id" value='008' class="form-control">自立訓練（生活訓練）　
                    </div>
                </div>
                <div class='sform'>
                    <label for="address" class="col-sm-3 control-label">住所（必須）</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                <div class='sform'>
                    <label for="phone_number" class="col-sm-3 control-label">電話番号（任意）</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control">
                </div>
                <div class='sform'>
                    <label for="fax_number" class="col-sm-3 control-label">FAX番号（任意）</label>
                    <input type="text" name="fax_number" id="fax_number" class="form-control">
                </div>
                <div class='sform'>
                    <label for="email" class="col-sm-3 control-label">メールアドレス</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class='sform'>
                    <label for="url" class="col-sm-3 control-label">ホームページ</label>
                    <input type="text" name="url" id="url" class="form-control">
                </div>
                <div class='sform'>
                    <label for="photo_path" class="col-sm-3 control-label">写真</label>
                    <input type="text" name="photo_path" id="photo_path" class="form-control">
                </div>

            </div>
        </div>
        <!-- 事業所登録ボタン -->
        <div class='sform'>
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-primary">登録</button>
            </div>
        </div>
    </form>
    <!-- 表⽰領域 -->
    @if (count($offices) > 0)
    <div class="sform">
        <div class="panel-heading">事業所リスト</div>
        <div class="panel-body">
            <table class="table table-striped task-table">
                <!-- テーブルヘッダ -->
                <thead>
                    <th>事業所</th>
                </thead>
                <!-- テーブル本体 -->
                <tbody>
                    @foreach ($offices as $office)
                    <tr>
                        <td class="table-text">
                            <div>{{ $office->office_name }}</div>
                        </td>
                        <td>
                            <!-- 削除ボタン -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    <!-- ここまでタスクリスト -->
</div>
@endsection