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
        // return 'hero2';

        // 繋がっていることが確認できたらアクションに実際の処理内容を記述していく
        // 今回は武器であるviewファイルを呼び出す処理を記述する
        // 拡張機能であるLaravel Create Viewを入れておくと便利
        // https://marketplace.visualstudio.com/items?itemName=glitchbl.laravel-create-view

        return view('hero2');
    }

    public function hero3Appear()
    {
        return 'hero3';
    }
}
