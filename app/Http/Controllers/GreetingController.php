<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{


    public function random()
    {
        $msgs = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $rand_nums = [0, 1, 2, 3];
        $rand_key = array_rand($rand_nums);
        return  '<h1>ランダムなメッセージ</h1>' .
            "<h2>{$msgs[$rand_key]}</h2>";
    }


    public function operetor($operetor)
    {
        switch ($operetor) {
            case 'morning':
                return "<h1>朝のあいさつ</h1><br>" .
                    "<h2>おはようございます</h2>";
                break;
            case 'afternoon':
                return  "<h1>昼のあいさつ</h1><br>" .
                    "<h2>こんにちは</h2>";
                break;
            case 'evening':
                return  "<h1>夕方のあいさつ</h1><br>" .
                    "<h2>こんばんは</h2>";
                break;
            case 'night':
                return "<h1>夜のあいさつ</h1><br>" .
                    "<h2>おやすみ</h2>";
                break;
        }
    }

    public function word($word)
    {
        return view('greets.greeting', ['word' => $word]);
    }
}
