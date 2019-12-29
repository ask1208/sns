<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset("css/style.css")}}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

           

        </style>
    </head>
    <body>
       <div class="video-content">
           <video src="https://tech-dig.jp/wp/wp-content/uploads/2018/05/test.mp4"  autoplay playsinline muted loop></video> 

            <div class="content">
                <div class="top-btn">
                <a href="{{ url('/timeline') }}"> click </a>
                </div>
            </div>
        </div>    
    </body>
</html>