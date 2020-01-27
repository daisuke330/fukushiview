<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; //付け加える

use App\Offices; //付け加える

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //キーワードを取得
        $keyword = $request->input('keyword');

        //もしキーワードが入力されている場合
        if (!empty($keyword)) {
            //事業所名から検索
            $offices = DB::table('offices')
                ->where('office_name', 'like', '%' . $keyword . '%')
                ->paginate(4);

            //リレーション関係にあるテーブルの材料名から検索
            $offices = Category::whereHas('categories', function ($query) use ($keyword) {
                $query->where('category_name', 'like', '%' . $keyword . '%');
            })->paginate(4);
        } else { //キーワードが入力されていない場合
            $recipes = DB::table('offices')->paginate(4);
        }
        //検索フォームへ
        return view('main', [
            'offices' => $offices,
            'keyword' => $keyword,
        ]);
    }
}
