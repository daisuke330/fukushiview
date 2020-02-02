<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Member;
use App\Office;
use App\Category;
use App\Review;

class OfficeInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // idを受け取って、そのidの事業所情報を表示
    public function index($id)
    {
        // idを取得
        $office = Office::find($id);
        $category = $office->category_id;
        $category_name = Category::find($category);
        $office_id = $office->id;
        $reviews = DB::table('reviews')->where('office_id', $office_id)->get();
        // $member_id = $reviews->member_id;
        // $members = DB::table('members')->where('member_id', $member_id)->get();
        // ddd($office, $office_id, $category_name, $reviews);
        return view('office_info', ['office' => $office, 'category_name' => $category_name, 'reviews' => $reviews]);
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
        //
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
