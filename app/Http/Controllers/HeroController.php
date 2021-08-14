<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function hero1Appear()
    {
        return 'hero1';
    }

    public function hero2Appear()
    {
        // 最初にルーティングファイルとコントローラファイルが繋がっているか確認する
        // この作業を行っておけば、ルーティングとコントローラが上手く繋がらないというエラーを最初に潰しておける
        return 'hero2';

    }
}
