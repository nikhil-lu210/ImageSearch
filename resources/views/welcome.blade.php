<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fondamento&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Berkshire Swash', cursive;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .links{
                font-family: 'Fondamento', cursive;
            }
            .links a{
                font-size: 30px;
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
                /* font-size: 13px; */
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
            <div class="content">
                <div class="title m-b-md">
                    Advance Searching System
                </div>

                <div class="links">
                    <a href="{{ route('nikhil.index') }}">Mr. NIKHIL</a>
                    <a href="">||</a>
                    <a href="{{ route('pias.index') }}">Mr. PIAS</a>
                </div>
            </div>
        </div>
    </body>
</html>
