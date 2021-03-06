<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Review;
use App\Office;

class InsertReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $office = Office::find($id);
        return view('insert_reviews', ['office' => $office]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        // バリデーション
        $validator = Validator::make($request->all(), [
            'strong_point' => 'required|string|between:50,250',
            'weak_point' => 'required|string|between:50,250',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('insertreviews.index', ['id' => $request->office_id])
                ->withInput()
                ->withErrors($validator);
        }
        // Eloquentモデル
        $review = new Review;
        $review->office_id = $request->office_id;
        $review->member_id = 1;
        $review->strong_point = $request->strong_point;
        $review->weak_point = $request->weak_point;
        $review->is_pre = 1;
        $review->posted_at = '2020-02-02 12:58:03';
        $review->save();
        // ddd($request);
        // ルーティング「OfficeInfoController.index」にリクエスト送信（⼀覧ページに移動）
        return redirect()->route('officeinfo.index', ['id' => $review->office_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
