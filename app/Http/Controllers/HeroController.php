<?php

namespace App\Http\Controllers;

use App\Models\Armor;
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
        // 防具取得処理を行う
        // 防具とはデータのこと
        // 防具装備処理を行う
        // 防具装備とはviewファイルにデータを渡すこと
        // 防具の取得の前に防具の設計図を作る必要あり
        // これはLaravelのマイグレーションファイルを作成する
        // マイグレーションファイルの作成が終わったら、データのひな形であるモデルファイルを作成する
        // この段階でphpMyAdminなどのツールで実際にデータを登録して、防具を実体化させる
        // モデルファイルとマイグレーションファイルはArtisanコマンドで同時に作成できる
        // この時モデル名の先頭は大文字で今回は防具なのでArmorモデルを作成する

        // id1のArmorレコードの取得
        $armor=Armor::find(1);
        // viewヘルパ関数を第2引数でビューに渡したいデータを連想配列で設定
        return view('hero3',['armor'=>$armor]);
    }
}
