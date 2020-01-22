<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hoge(Request $request)
    {
        $aaa = 'bbbb';

        return view('test', ['param' => $aaa]);
    }
}
