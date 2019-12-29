<?php

namespace App\Http\Controllers\Auth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \App\Tweet;

class TimelineController extends Controller
{
    public function showTimeLinePage()
    {
    $tweets = Tweet::paginate(5);   
    return view('auth.timeline',compact('tweets'));  // resource/views/auth/timeline.blade.phpを表示する

    }

    public function postTweet(Request $request)  //(Requestはpostリクエストを取得するためのものです。)
    {

        // dd($request->tweet);
        $validator = $request->validate([ //バリデーション設定
            'tweet' => ['required','string','max:280'],// 必須・文字であること・280文字まで
        ]);

        Tweet::create([// tweetテーブルに入れるよーっていう合図
            'user_id'=>  "1",// Auth::user()->id,  は、現在ログインしている人（つまりツイートしたユーザー）
            'tweet' => $request->tweet,//ツイートの内容
            'created_at'=> $request->created_at,
        ]);
        return back();//リクエスト送ったページに戻る
    }
}
