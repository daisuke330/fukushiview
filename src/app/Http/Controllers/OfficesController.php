<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Office;


class OfficesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 下記のように編集
        $offices = Office::orderBy('created_at', 'asc')->get();
        // ddd($offices); // $officesの中⾝を出⼒
        return view('offices', [
            'offices' => $offices
        ]);
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
        // バリデーション
        $validator = Validator::make($request->all(), [
            'office_name' => 'required',
            'category_id' => 'required',
            'address' => 'required',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('offices.index')
                ->withInput()
                ->withErrors($validator);
        }
        // Eloquentモデル
        $office = new Office;
        $office->office_number = $request->office_number;
        $office->office_name = $request->office_name;
        $office->category_id = $request->category_id;
        $office->address = $request->address;
        $office->phone_number = $request->phone_number;
        $office->fax_number = $request->fax_number;
        $office->email = $request->email;
        $office->url = $request->url;
        $office->photo_path = $request->photo_path;
        $office->save();
        // ルーティング「offices.index」にリクエスト送信（⼀覧ページに移動）
        return redirect()->route('offices.index');
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
