<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; //付け加える

use App\Office; //付け加える

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //キーワードを取得
        $keyword = $request->input('keyword');

        //もしキーワードが入力されている場合
        if (!empty($keyword)) {
            //事業所名から検索
            $offices = Office::where('office_name', 'like', '%' . $keyword . '%')
                ->orWhereHas('categories', function ($query) use ($keyword) {
                    $query->where('category_name', 'like', '%' . $keyword . '%');
                })
                ->paginate(4);

            //リレーション関係にあるテーブルの事業種名から検索
            // $offices = Office::whereHas('categories', function ($query) use ($keyword) {
            //     $query->where('category_name', 'like', '%' . $keyword . '%');
            // })->paginate(4);
        } else { //キーワードが入力されていない場合
            $offices = DB::table('offices')->paginate(4);
        }
        //検索フォームへ
        return view('search_result', [
            'offices' => $offices,
            'keyword' => $keyword,
        ]);
    }
}
