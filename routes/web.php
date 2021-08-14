<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
|
| contains the "web" middleware group. Now create something great!
*/

// Laravelをドラクエに例えるならルイーダの酒場のようなもの
// 特定のコマンドを備えたキャラクタを登録する
// リクエストメソッド+URIの形式で登録
// 装備なし勇者、武器あり勇者、防具あり勇者の3人の勇者を登録する
// 登録ができたらその勇者を呼び出せるかも確認しておく
// 勇者登録、勇者呼び出しの流れで作業をすすめてみる


// 登録はルイーダの酒場であるweb.phpで行い
// 特定のコマンドを備えた勇者を呼び出すにはコントローラを利用する
// コントローラは勇者の待機所のようなもの
// 外の世界から勇者が呼び出されたさいにはまずweb.phpに特定のコマンドを持った勇者がいるかを確認する
// 該当する勇者がいれば待機所であるコントローラから該当の勇者を呼び出すことになる

// 装備なし勇者の登録
// 下記の例だと勇者の登録と呼び出しを同じ場所で行っている

// Route::get('larahero/hero1', function ()
// {
//     return 'hero1が呼び出されました';
// });

// 下記はコントローラを利用して登録をweb.phpで行い呼び出しをコントローラファイルに移譲している
// コントローラはphp artisanコマンドで作成する
// php artisan make:controller HeroController
// コントローラの命名規則はアッパーキャメル

// 装備なし勇者の登録。呼び出し内容をコントローラに移譲したパターン
// 注目するべきはgetメソッドの第2引数部分
// 勇者が持つ特定のコマンドのことをアクションという

// 下記の例ではgetでlarahero/hero1にアクセスされたらhero1Appearはアクションを呼び出す
// アクションの中身はコントローラファイルに記載する必要あり
Route::get('larahero/hero1', [HeroController::class, 'hero1Appear']);
