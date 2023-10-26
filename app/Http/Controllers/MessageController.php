<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function randomsystem()
    {
        $input = array("おはようございます", "こんにちは", "こんばんは", "おやすみ");
        $rand_key = array_rand($input, 2);
        $rand_msg = $input[$rand_key[0]];
        $rand_msg2 = $input[$rand_key[1]];

        return view('message.random', ['rand_msg' => $rand_msg, 'rand_msg2' => $rand_msg2]);
    }
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

    public function freewords($words)
    {
        return view('message.freewords', ['words' => $words]);
    }
}
