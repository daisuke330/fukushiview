<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <style>
        html,
        body {
            background-color: #fff;
            color: black;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .flex-center {
            align-items: top;
            display: flex;
            justify-content: center;
            height: 180px;
        }


        .relative {
            position: relative;
            width: 1000px;
            height: 50px;
        }

        .absolute {
            position: absolute;
            height: 150px;
            left: 10px;
            top: 10px;
        }

        .absolute1 {
            position: absolute;
            height: 35px;
            right: 500px;
            top: 20px;
        }

        .absolute2 {
            position: absolute;
            height: 35px;
            right: 350px;
            top: 20px;
        }

        .absolute3 {
            position: absolute;
            height: 35px;
            right: 50px;
            top: 20px;
        }

        .absolute4 {
            position: absolute;
            height: 35px;
            left: 70px;
            top: 135px;
            color: #636b6f;
        }

        .absolute5 {
            position: absolute;
            height: 35px;
            left: 320px;
            top: 65px;
            color: black;
            font-size: 1.5em;
            font-style: bold;
        }

        .title_comment {
            align-items: center;
            display: flex;
            justify-content: center;
            color: black;
        }

        .space {
            height: 50px;
        }

        .space2 {
            width: 100px;
        }

        .space3 {
            width: 200px;
        }

        /*フォーム全体*/
        .sform {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .radio {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content2 {
            display: flex;
            justify-content: center;
        }

        .content3 {
            display: flex;
            justify-content: right;
        }

        /* .search_container {
            box-sizing: border-box;
        }

        .search_container input[type="text"] {
            background: #ccddf5;
            border: none;
            height: 3.0em;
        }

        .search_container input[type="text"]:focus {
            outline: 0;
        }

        .search_container input[type="submit"] {
            cursor: pointer;
            border: none;
            background: #3879D9;
            color: #fff;
            outline: none;
            height: 3.2em;
            width: 4.0em;
        }

        .search_container ::-webkit-input-placeholder {
            color: #3879D9;
        } */
        .search_container {
            box-sizing: border-box;
            position: relative;
            border: 1px solid #999;
            padding: 3px 10px;
            border-radius: 30px;
            height: 3.3em;
            width: 260px;
            overflow: hidden;
        }

        .search_container input[type="text"] {
            border: none;
            height: 2.6em;
            font-size: 1.0em;
        }

        .search_container input[type="text"]:focus {
            outline: 0;
        }

        .search_container input[type="submit"] {
            cursor: pointer;
            font-family: FontAwesome;
            font-size: 1.7em;
            border: none;
            background: none;
            color: #3879D9;
            position: absolute;
            width: 2.5em;
            height: 2.5em;
            right: 0;
            top: -10px;
            outline: none;
        }

        .review_box {
            display: flex;
        }

        .review_box2 {
            width: 200px;
        }

        .textarea {
            resize: none;
            width: 200px;
            height: 200px;
        }

        .button {
            /* 文字サイズを1.4emに指定 */
            font-size: 1.4em;

            /* 文字の太さをboldに指定 */
            font-weight: bold;

            /* 縦方向に10px、
9
     * 横方向に30pxの余白を指定 */
            padding: 10px 30px;

            /* 文字色を白色に指定 */
            color: #fff;

            /* ボーダーをなくす */
            border-style: none;
            /* グラデーションの指定 */
            background: -moz-linear-gradient(bottom, #36d, #248 50%, #36d);
            background: -webkit-gradient(linear, left bottom, left top, from(#36d), color-stop(0.5, #248), to(#36d));

            /* 角丸の指定 */
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;

        }

        .button2 {
            /* 文字サイズを1.4emに指定 */
            font-size: 1.0em;


            /* 縦方向に10px、
9
     * 横方向に30pxの余白を指定 */
            padding: 5px 20px;

            /* 文字色を白色に指定 */
            color: #fff;

            /* ボーダーをなくす */
            border-style: none;
            /* グラデーションの指定 */
            background: -moz-linear-gradient(bottom, #36d, #248 50%, #36d);
            background: -webkit-gradient(linear, left bottom, left top, from(#36d), color-stop(0.5, #248), to(#36d));

            /* 角丸の指定 */
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }

        .img {
            width: 300px;
        }

        .button3 {
            display: flex;
            justify-content: center;


        }
    </style>
</head>

<body>
    <div class='flex-center'>
        <div class='relative'>
            <img src="{{asset('fvbase.gif')}}" alt=''>
            <a href='/index'><img src="{{asset('fvtitle.gif')}}" alt='' class='absolute'></a>
            @yield('button1')
            @yield('button2')
            <img src="{{asset('ask.png')}}" alt='' class='absolute3'>
            <p class='absolute4'>
                フクシビューは障がい福祉事業所についてみなさまからの声を集めた、みなさまに合った事業所選びのためのサイトです。
            </p>
            <p class='absolute5'>
                あなたからあなたへ　フクシのヒント
            </p>
        </div>
    </div>
    <div class='space'>

    </div>
    @yield('content')
    </div>






</body>

</html>