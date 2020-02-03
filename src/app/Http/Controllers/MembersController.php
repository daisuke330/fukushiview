<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Member;


class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        // 以下を追加
        return view('members');
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
            'nickname' => 'required',
            'email' => 'required',
            'gender_code' => 'required',
            'age_code' => 'required',
            'password' => 'required|confirmed|string|between:8,20',
            // 'nickname' => 'required',
            // 'password' == 'password2',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('members.index')
                ->withInput()
                ->withErrors($validator);
        }
        // Eloquentモデル
        $member = new Member;
        $member->member_id = rand();
        $member->nickname = $request->nickname;
        $member->email = $request->email;
        $member->last_name = $request->last_name;
        $member->first_name = $request->first_name;
        $member->gender_code = $request->gender_code;
        $member->age_code = $request->age_code;
        $member->password = $request->password;
        $member->save();
        // ルーティング「members.index」にリクエスト送信（⼀覧ページに移動）
        return redirect()->route('members.index');
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
