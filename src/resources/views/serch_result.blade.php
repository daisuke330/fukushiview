<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>fukushiview_serch_result</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
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
            left: 50px;
            top: 135px;
        }

        .title_comment {
            align-items: center;
            display: flex;
            justify-content: center;
            color: black;
        }

        .space {
            height: 100px;
        }
    </style>
</head>

<body>
    <div class='flex-center'>
        <div class='relative'>
            <img src='fvbase.gif' alt=''>
            <img src='fvtitle.gif' alt='' class='absolute'>
            <img src='kaiintoroku.png' alt='' class='absolute1'>
            <img src='login.png' alt='' class='absolute2'>
            <img src='ask.png' alt='' class='absolute3'>
            <p class='absolute4'>
                フクシビューは障がい福祉事業所についてみなさまからの声を集め、みなさま合った事業所選びのためのサイトです。
            </p>
        </div>
    </div>
    <div class='space'>

    </div>





</body>

</html>