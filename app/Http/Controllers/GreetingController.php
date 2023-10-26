<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greetings($daytiming)
    {
        if ($daytiming == 'morning') {
            $japanese = '朝のあいさつ';
            $greeting = 'おはようございます';
        } elseif ($daytiming == 'afternoon') {
            $japanese = '昼のあいさつ';
            $greeting = 'こんにちは';
        } elseif ($daytiming == 'evening') {
            $japanese = '夕方のあいさつ';
            $greeting = 'こんばんは';
        } elseif ($daytiming == 'night') {
            $japanese = '夜のあいさつ';
            $greeting = 'おやすみ';
        } else {
            $japanese = 'エラーが発生しました';
            $greeting = '入力をやり直してください';
        }
        return view('message.greeting', [
            'daytiming' => $daytiming,
            'japanese' => $japanese, 'greeting' => $greeting
        ]);
    }
}
