<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <a href="/user">学生浏览信息</a>                
                <!-- 做测试-->
                <!-- POST -->
               <!--  <form action='/hello' method='post'>
                    <input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'>
                    <input type='submit' value='POST提交'>
                </form>
                <! PUT -->
                <!-- <form action='/aa' method='post'>
                    <input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'>
                    <input type='hidden' name='_method' value='put'>
                    <input type='submit' value='put提交'>
                </form>
                <form action='/hello' method='post'>
                    <input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'>
                    <input type='hidden' name='_method' value='delete'>
                    <input type='submit' value='delete提交'> 
                </form>
                <form action='/aa' method='post'>
                    <input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'>
                    <input type='submit' value='多种方式提交'>
                </form> --> 
                <!-- 测试 -->

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
