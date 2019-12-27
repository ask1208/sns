<!DOCTYPE html>
<html lang="ja" style="height:100%;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SNS作ってみた</title>
  <link href="{{asset("css/style.css")}}" rel="stylesheet">
</head>
<body>
  <div class=img>
  <div class="wapper">

  <header class="header">SNS</header>
    <div class="contents"></div>
    <div class="form">
        <form class="new_message" id="new_message" enctype="multipart/form-data" action="/sns/public/timeline"  accept-charset="UTF-8" method="post">
        {{ csrf_field() }}    
        <input name="utf8" type="hidden" >
          <div class="input-box">
              <input placeholder="つぶやき" class="input-box__text" type="text" name="tweet" id="message_content">
           
            <!-- <label for="file_photo">
              写真
              <input type="file" id="file_photo" style="display:none;">
            </label> -->

          </div>
              <input type="submit" name="commit" value="送信" class="submit-btn" data-disable-with="Send">       
          @if($errors->first('tweet'))
           <p style="font-size: 0.7rem; color:red; padding:0 2rem;">※{{$errors->first('tweet')}}</p>
          @endif
        </form>
        <div class="left-content">
      </div>
      <div class="right-content">
      </div>

        <div class="tweet-wrappar">
        @foreach($tweets as $tweet)
        <div style="padding:2rem; border-top: solid 1px #E6ECF0; border-bottom: solid 1px #E6ECF0;">
         <div>{{ $tweet->tweet }}: {{ $tweet -> created_at}}</div>
        </diV>
        @endforeach
    
    </div>
      
</body>
</html>